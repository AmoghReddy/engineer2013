<?
session_start();
require("connect.php");

switch($_GET['action']){
	case "login":login();
	case "logout":logout();
	case "signup":signup();
	case "register_event":register_event();
}
function isLogin(){
	if(!isset($_SESSION) && !isset($_SESSION['first_name']) && !isset($_SESSION['last_name']) && !isset($_SESSION['email']))
		return true;
	else
		return false;
}
function login(){
	$email=mysqli_real_escape_string($connect,$_POST['username']);
	$password=mysqli_real_escape_string($connect,$_POST['password']);
	$data=$mysqli_query($connect,"select * from engi_users where email='$email' and password=md5('$password')");
	if($mysqli_num_rows($data)>0){
		session_start();
		$_SESSION['email']=$email;
	}
	else{
		header('HTTP/1.0 403 Forbidden');
	}
}
function logout(){
	$_SESSION=array();
	session_destroy();
}
function signup(){
	if( isset($_POST['first_name']) ||
		isset($_POST['email']) ||
		isset($_POST['password1']) ||
		isset($_POST['password2']) ||
		isset($_POST['institute_name']) ||
		($_POST['first_name']=="") ||
		($_POST['email']=="") ||
		($_POST['password1']=="") ||
		($_POST['password2']=="") ||
		($_POST['institute_name']=="")){
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
		
	if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	
	if(password1!=password2){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	
	$query=mysqli_query($connect,"select * from engi_users where email='$email'");
	if(mysqli_num_rows($query)>0){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
	
	$query=mysqli_query($connect "INSERT INTO `engineer`.`engi_users` (`first_name`, `last_name`, `email`, `password`, `phone`, `city`, `college`) VALUES (
		'$first_name',
		'$last_name',
		'$email',
		md5('$password'),
		'$phone',
		'$city'
		'$institution_name');") or die("cant signup");
	
}
function register_event(){
	if(!isLogin()){
		header('HTTP/1.0 403 Forbidden');
		return;
	}
}
?>
