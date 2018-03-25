<?php
$con=new mysqli('localhost','root','','loginform'); 
if($con->connect_errno)
{
	echo $con->connect_error;
die();
}
else
{
	echo "database is connected";
}
?>
<html>
<head>
<title>LOGINFORM</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<form action="config.php" method="post">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="user"></td></tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"></td></tr>
<td><input type="button" value="submit"></td></table>
</form>
<?php
if(isset($_POST['submit']))
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	if($user!=""&&$pass!="")
	{
		$sql="INSERT INTO form (user,pass) values ('$user','$pass')";
	if($con->query($sql))
	{
		echo "data stored";
	}
	else
	{
		echo "insert data failed";
	}
else
{
	echo "all fields required";
	}
}
?>
</body>
</html>