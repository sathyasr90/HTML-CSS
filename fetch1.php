<?php
$conn=new mysqli('localhost','root','','class1');
if($conn->connect_errno)
{
	echo $conn->connect_error;
	
}
else 
{
	echo "Database connected";
}

$sql="SELECT name FROM php3";
if($result=$conn->query($sql))
{
	echo "<pre>";
	print_r ($result);
}
if($result->num_rows)
{
	while ($row=$result->fetch_object())
	{
		echo $row->name.'<br>';
	}
}
?>