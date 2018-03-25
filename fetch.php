<?php

$conn=new mysqli('localhost','root','','class1');
if($conn->connect_errno)
{
	echo $conn->connect_error;
	die();
}
else
{
	//echo "database connected";
}
$sql="SELECT name,age FROM php1";
if($result=$conn->query($sql))
{
	//echo "<pre>";
	//print_r($result); 
	if($result->num_rows)
	{
	while($row=$result->fetch_object())
	{
		echo $row->name;
		echo ' ';
		echo $row->age;
		echo '<br>';
	}
	}
}


?>
