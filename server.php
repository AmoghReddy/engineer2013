<?
session_start();
require("connect.php");
switch($_GET['action']){
	case "login":login();
}
function login(){
	$email=mysqli_real_escape_string($connect,$_POST['username']);
	$password=mysqli_real_escape_string($connect,$_POST['password']);
	$data=$mysqli_query($connect,"select * from engi_users where email=$email and password=$password");
	if($mysqli_num_rows($data)>0){
		session_start();
		$_SESSION['email']=$email;
	}
	else{
		//raise 403
	}
}
?>
