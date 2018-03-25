<!Doctype html>
<html>
<head>
<title>Home Page</title>
</head>
<body>
<?php
//start a session
session_start();
$userName=$_SESSION['user_name'];
//check if userName is empty then redirect to login page
if(empty($userName))
{
	//redirect to Login page
	header('location:login.php');
}
//else print username with welcome message 
 echo "welcome $userName"; 
?>
<a href="logout.php">LOGOUT</a>
</body>
</html>