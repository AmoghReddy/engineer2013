<?
session_start();
switch($_GET['action']){
	case "login":login();break;
	case "logout":logout();break;
	case "signup":signup();break;
	case "register_event":register_event();break;
	case "account":account();break;
	case "unregister":unregistration();break;
	case "team_register":team_register();break;
	case "view_teams":view_teams();break;
}
function isLogin(){
	if(isset($_SESSION) && isset($_SESSION['first_name']) && isset($_SESSION['last_name']) && isset($_SESSION['email']))
		return true;
	else
		return false;
}
function getStudentId(){
	require("connect.php");
	$email=$_SESSION['email'];
	$query=mysqli_query($connect,"select id from engi_users where email='$email'");
	
	while($row=mysqli_fetch_array($query)){
		return $row['id'];
	}
	return "";
}
function login(){
	require("connect.php");
	$email=mysqli_real_escape_string($connect,$_POST['username']);
	$password=mysqli_real_escape_string($connect,$_POST['password']);
	error_log("select * from engi_users where email='$email' and password=md5('$password')");
	$data=mysqli_query($connect,"select * from engi_users where email='$email' and password=md5('$password')");
	while($row=mysqli_fetch_array($data)){
		session_start();
		$_SESSION['first_name']=$row['first_name'];
		$_SESSION['last_name']=$row['last_name'];
		$_SESSION['email']=$email;
		echo json_encode(array('fname'=>$row['first_name'],'lname'=>$row['last_name'],'email'=>$email));
		//echo "{fname: '".$row['first_name']."' , lname: '".$row['last_name']."' , email: '$email'}";
		return;
	}
	header('HTTP/1.0 403 Forbidden');

}
function logout(){
	$_SESSION=array();
	session_destroy();
}
function signup(){
	require("connect.php");
	if( !isset($_POST['first_name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['password1']) ||
		!isset($_POST['password2']) ||
		!isset($_POST['institution_name']) ||
		($_POST['first_name']=="") ||
		($_POST['email']=="") ||
		($_POST['password1']=="") ||
		($_POST['password2']=="") ||
		($_POST['institution_name']=="")){
			header('HTTP/1.0 403 Forbidden');
			return;
		}
		$first_name=mysqli_real_escape_string($connect,$_POST['first_name']);
		$last_name=mysqli_real_escape_string($connect,$_POST['last_name']);
		$email=mysqli_real_escape_string($connect,$_POST['email']);
		$password1=mysqli_real_escape_string($connect,$_POST['password1']);
		$password2=mysqli_real_escape_string($connect,$_POST['password2']);
		$city=mysqli_real_escape_string($connect,$_POST['city']);
		$institution_name=mysqli_real_escape_string($connect,$_POST['institution_name']);
		$phone=mysqli_real_escape_string($connect,$_POST['phone']);
		
	//if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)){
	if (!email_valid($email)){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	
	if($password1!=$password2){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	
	$query=mysqli_query($connect,"select * from engi_users where email='$email'");
	if(mysqli_num_rows($query)>0){
		echo "Email already registered";
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	$query=mysqli_query($connect ,"INSERT INTO engi_users (first_name, last_name, email, password, phone, city, college) VALUES ('$first_name','$last_name','$email',md5('$password1'),'$phone','$city','$institution_name');");
	echo "success";
	return;
	
	
}

function register_event(){
	require("connect.php");
	if(!isLogin()){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	//error_log($_GET['event_id'],0);
	if(!isset($_GET['event_id'])){
		header("HTTP/1.0 404 Not Found");
		return;
	}
	$student_id=getStudentId();
	$event_id=mysqli_real_escape_string($connect,$_GET['event_id']);
	// see if already registered
	$query=mysqli_query($connect,"select * from engi_registrations where student_id='$student_id' and event_id='$event_id'");
	if(mysqli_num_rows($query)>0){
		//error_log("avasdvasdvavasd");
		echo "success";
		return;
	}
	$query=mysqli_query($connect,"insert into engi_registrations (student_id,event_id) values('$student_id','$event_id')") or die("cant register");
	echo "success";
}

function register_event_student($student_id,$team_id="-1"){
	require("connect.php");
	if($student_id==0)
		// not adding anything but sending success status
		return true;
	$event_id=mysqli_real_escape_string($connect,$_GET['event_id']);
	// see if already registered
	$query=mysqli_query($connect,"select * from engi_registrations where student_id='$student_id' and event_id='$event_id'");
	if(mysqli_num_rows($query)>0){
		return false;
	}
	$query=mysqli_query($connect,"insert into engi_registrations (student_id,event_id,team_id) values('$student_id','$event_id','$team_id')") or die("cant register");
	return true;
}

function account(){
	require("connect.php");
	if(!isLogin()){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	$data=array("individual"=>array(),"teams"=>array(), "requests"=>array());
	$student_id=getStudentId();
	$query=mysqli_query($connect,"SELECT engiapp_engievents.id,engiapp_engievents.event_name,engiapp_engievents.team_size FROM engi_registrations  inner join engiapp_engievents on engi_registrations.event_id=engiapp_engievents.id where engi_registrations.student_id='$student_id'");
	while($row=mysqli_fetch_array($query)){
		array_push($data["individual"],array("event_id"=>$row['id'], "event_name"=>$row['event_name'],"team_size"=>$row["team_size"]));
	}
	echo json_encode($data);
	return;
}

function unregistration(){
	require("connect.php");
	if(!isLogin()){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	if(isset($_GET['event_id'])){
		$event_id=mysqli_real_escape_string($connect,$_GET['event_id']);
		$student_id=getStudentId();
		$team_size=getMaxTeamSize($event_id);
		if($team_size>1){
			//get team_id
			$query=mysqli_query($connect,"select team_id from engi_registrations where student_id=$student_id and event_id=$event_id");
			$data=mysqli_fetch_array($query);
			$team_id=$data["team_id"];
			if($team_id="-1"){
				$query=mysqli_query($connect,"delete from engi_registrations where student_id=$student_id and event_id=$event_id");
				account();
				return;
			}
			//delete from engi_teams
			$query=mysqli_query($connect,"delete from engi_registrations where team_id=$team_id");
			//delete all registered people
			$query=mysqli_query($connect,"delete from engi_teams where team_id=$team_id");
		}
		else{
			$query=mysqli_query($connect,"delete from engi_registrations where event_id='$event_id' and student_id='$student_id'");
		}
		account();
	}
	
}
function isUserSignup($email){
	require("connect.php");
	$query=mysqli_query($connect,"select id from engi_users where email='$email'");
	while($row=mysqli_fetch_array($query)){
		return $row["id"];
	}
	return "";
}
function getMaxTeamSize($event_id){
	require("connect.php");
	$query=mysqli_query($connect,"select team_size from engiapp_engievents where id=$event_id") or die(error_log(("select team_size from engiapp_engievents where id=$event_id")));
	while($data=mysqli_fetch_array($query)){
		return $data["team_size"];
	}
}
function newTeamId(){
	require("connect.php");
	$query=mysqli_query($connect,"select max(team_id) as id from engi_teams");
	$data=mysqli_fetch_array($query);
	error_log("id="+($data["id"]+1));
	return intval($data["id"])+1;
}
function team_register(){
	// 403 if not logged in 404 if not all are registered
	require("connect.php");
	if(!isLogin()){
		header('HTTP/1.0 403 Forbidden');
		return;
	}	
	if(isset($_GET['event_id'])){
		$event_id=mysqli_real_escape_string($connect,$_GET['event_id']);
		$student_id=getStudentId();

		// see whether all emails are valid
		$maxTeamSize=getMaxTeamSize($event_id);
		$total=$maxTeamSize+1;
		$team_name=mysqli_real_escape_string($connect,$_POST["registration_team_name"]);
		// team name required
		if($team_name==""){
			echo "error,team name required";
			return;
		}

		while ($total--) {
			// first user is the one who is logged in
			if ($total!=1 && $total!=0){
				$student_email=mysqli_real_escape_string($connect,$_POST["registration_email".$total]);
				if($student_email!=""){
					$student_id=isUserSignup($student_email);
					if($student_id==""){
						echo "error,".$student_email." has not registered to ENGINEER";
						return;
					}
				}
			}
		}
		$student_id=getStudentId();
		// see whether team_id =-1
		$query=mysqli_query($connect,"select team_id from engi_registrations where event_id=$event_id and student_id=$student_id");
		$num_rows=mysqli_num_rows($query);
		$data=mysqli_fetch_array($query);
		$team_id=$data["team_id"];
		if($team_id == "-1" || $num_rows==0){
			$team_id=newTeamId();
			if($maxTeamSize>1){
				// check if user who has logged in has already registered
				// TODO check this
				if(!register_event_student(getStudentId(),$team_id) && $data["team_id"]!="-1"){
					echo "error, You have already registered";
					return;
				}
				// registered all of them
				$total=$maxTeamSize+1;
				$extra_message="";
				for($total=$maxTeamSize;$total>1;$total--){
					$student_email=mysqli_real_escape_string($connect,$_POST["registration_email".$total]);
					$student_id=isUserSignup($student_email);
					// TODO add extra message and send success
					$status=register_event_student($student_id,$team_id);
				}
				error_log("Asfasdfads".$data["team_id"]);
				if($data["team_id"]=="-1"){
					$student_id=getStudentId();
					error_log("update engi_registrations set team_id=$team_id where student_id=$student_id and event_id=$event_id");
					$query=mysqli_query($connect,"update engi_registrations set team_id=$team_id where student_id=$student_id and event_id=$event_id");
				}
				$query=mysqli_query($connect,"insert into engi_teams (name,event_id,team_id) values ('$team_name',$event_id,$team_id)");
				echo "success";
			}
		}
		else{
			echo "error, You have already registered";
			return;

		}
	}
}

function view_teams(){
	require("connect.php");
	if(!isLogin()){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	if(isset($_GET['event_id'])){
		$event_id=mysqli_real_escape_string($connect,$_GET["event_id"]);
		$student_id=getStudentId();
		$query=mysqli_query($connect,"select team_id from engi_registrations where student_id=$student_id and event_id=$event_id");
		$data=mysqli_fetch_array($query);
		$team_id=$data["team_id"];
		if($team_id=="-1"){
			echo "error,team_incomplete";
			return;
		}
		// TODO test this
		$query=mysqli_query($connect,"select engi_users.first_name,engi_users.last_name,engi_users.email from engi_users,engi_registrations where engi_registrations.team_id=$team_id and engi_users.id=engi_registrations.student_id");

		error_log("select engi_users.first_name,engi_users.last_name,engi_users.email from engi_users,engi_registrations where engi_registrations.team_id=$team_id and engi_users.id=engi_registrations.student_id");

		$json=array("users"=>array());
		while($row=mysqli_fetch_array($query)){
			array_push($json["users"], array("first_name"=>$row["first_name"],"last_name"=>$row["last_name"],"email"=>$row["email"]));
		}
		echo json_encode($json);
		return;
	}

}

function email_valid($temp_email) { 
######## Three functions to HELP ######## 
        function valid_dot_pos($email) { 
            $str_len = strlen($email); 
            for($i=0; $i<$str_len; $i++) { 
                $current_element = $email[$i]; 
                if($current_element == "." && ($email[$i+1] == ".")) { 
                    return false; 
                    break; 
                } 
                else { 

                } 
            } 
            return true; 
        } 
        function valid_local_part($local_part) { 
            if(preg_match("/[^a-zA-Z0-9-_@.!#$%&'*\/+=?^`{\|}~]/", $local_part)) { 
                return false; 
            } 
            else { 
                return true; 
            } 
        } 
        function valid_domain_part($domain_part) { 
            if(preg_match("/[^a-zA-Z0-9@#\[\].]/", $domain_part)) { 
                return false; 
            } 
            elseif(preg_match("/[@]/", $domain_part) && preg_match("/[#]/", $domain_part)) { 
                return false; 
            } 
            elseif(preg_match("/[\[]/", $domain_part) || preg_match("/[\]]/", $domain_part)) { 
                $dot_pos = strrpos($domain_part, "."); 
                if(($dot_pos < strrpos($domain_part, "]")) || (strrpos($domain_part, "]") < strrpos($domain_part, "["))) { 
                    return true; 
                } 
                elseif(preg_match("/[^0-9.]/", $domain_part)) { 
                    return false; 
                } 
                else { 
                    return false; 
                } 
            } 
            else { 
                return true; 
            } 
        } 
        // trim() the entered E-Mail 
        $str_trimmed = trim($temp_email); 
        // find the @ position 
        $at_pos = strrpos($str_trimmed, "@"); 
        // find the . position 
        $dot_pos = strrpos($str_trimmed, "."); 
        // this will cut the local part and return it in $local_part 
        $local_part = substr($str_trimmed, 0, $at_pos); 
        // this will cut the domain part and return it in $domain_part 
        $domain_part = substr($str_trimmed, $at_pos); 
        if(!isset($str_trimmed) || is_null($str_trimmed) || empty($str_trimmed) || $str_trimmed == "") { 
            return false; 
        } 
        elseif(!valid_local_part($local_part)) { 
            return false; 
        } 
        elseif(!valid_domain_part($domain_part)) { 
            return false; 
        } 
        elseif($at_pos > $dot_pos) { 
            return false; 
        } 
        elseif(!valid_local_part($local_part)) { 
            return false; 
        } 
        elseif(($str_trimmed[$at_pos + 1]) == ".") { 
            return false; 
        } 
        elseif(!preg_match("/[(@)]/", $str_trimmed) || !preg_match("/[(.)]/", $str_trimmed)) { 
            return false; 
        } 
        else { 
            return true; 
        } 
} 

?>
