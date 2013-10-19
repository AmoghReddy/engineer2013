<!doctype html>
<html>
<head>
<title>Updates</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
</head>
<?
if (isset($_POST["password"])&&($_POST["password"]=="engi2013!")){
	include("connect.php");
	if($_POST["name"]!="" && $_POST["message"]!="")
		$query=mysqli_query($connect,"insert into engi_updates (name,message) values('".$_POST['name']."','".$_POST['message']."')");
}
?>
<form action="<? echo $_SERVER["PHP_SELF"];?>" method="post">
	<input type="password" value="<? echo $_POST['password'];?>" name="passowrd"/>
	<input type="text" name="name" placeholder="name" />
	<textarea name="message"></textarea>
	<input type="submit" value="submit" />
</form>
