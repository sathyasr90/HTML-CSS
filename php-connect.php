<?php
$conn=new mysqli('localhost','root','','class1');
if($conn->connect_errno)
{
	echo $conn->connect_error;
	die();
}
else
{
	echo "Database connected";
}

?>