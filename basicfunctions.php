<?
function isLogin(){
	if(!isset($_SESSION) && !isset($_SESSION['first_name']) && !isset($_SESSION['last_name']) && !isset($_SESSION['email']))
		return true;
	else
		return false;
}
?>
