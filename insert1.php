<?php
$con=mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'database not connected';
}
if(!mysqli_select_db($con,'insert'))
{
	echo 'database not selected';
}
$Name= $_POST['name'];
$Email=$_POST['email'];
$sql='INSERT INTO data (Name,Email) VALUES ('$Name','$Email')';
if(!mysqli_query($con,$sql))
{
	echo 'data not inserted';
}
else
{
	echo 'data inserted';
}
header('refresh:2; url=insertdata.html');
?>