<!doctype html>
<html>
<head>
<title>Registration Panel</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body style="padding:10px">
<form action="<?echo $_SERVER['PHP_SELF']; ?>" method="post">
<label>Password</label> <input type="password" name="password" value="<? echo $_POST['password']; ?>"/>
<label>Filter events</label>
<select name="event_filter">
<option value="-2">All Users</option>
<?
require("../connect.php");
$query=mysqli_query($connect,"select * from engiapp_engievents order by event_name");
while($row=mysqli_fetch_array($query)){
	echo "<option value='".$row["event_name"]."'>".$row["event_name"]."</option>";
}
?>
</select><br />
<input type="submit" class="btn" value="submit" />
</form>
<?
if($_POST['password']=="engi2013!"){
	if($_POST["event_filter"]=="-1"){
		$query=mysqli_query($connect,"select engi_users.first_name,engi_users.last_name,engi_users.email,engi_users.phone,engi_users.city,engi_users.college,engiapp_engievents.event_name from engi_users inner join engi_registrations on engi_registrations.student_id=engi_users.id inner join engiapp_engievents on engiapp_engievents.id=engi_registrations.event_id where engiapp_engievents.event_name !='alse'") or die("cant do");
	}
	if($_POST["event_filter"]=="-2"){
		$query=mysqli_query($connect,"select * from engi_users");
	}
	else{
		$query=mysqli_query($connect,"select engi_users.first_name,engi_users.last_name,engi_users.email,engi_users.phone,engi_users.city,engi_users.college,engiapp_engievents.event_name from engi_users inner join engi_registrations on engi_registrations.student_id=engi_users.id inner join engiapp_engievents on engiapp_engievents.id=engi_registrations.event_id where engiapp_engievents.event_name='".$_POST["event_filter"]."'");
		echo "<h1>".$_POST['event_filter']."</h1><hr />";
	}
	
	echo "<table class='table'>";
	echo "<tr><th>No</th><th>Name</th><th>Email</th><th>Phone</th><th>City</th><th>College</th><th>Event</th>";
	$count=1;
	while($row=mysqli_fetch_array($query)){
		echo "<tr>";
		echo "<td>".$count."</td>";
		$count=$count+1;
		echo "<td>".$row['first_name']." ".$row['last_name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['phone']."</td>";
		echo "<td>".$row['city']."</td>";
		echo "<td>".$row['college']."</td>";
		if(isset($row['event_name']))
			echo "<td>".$row['event_name']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>
