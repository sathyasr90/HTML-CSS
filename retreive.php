<?php
$conn=new mysqli('localhost','root','','class1');
if($conn->connect_errno)
{
	echo $conn->connect_error;
}
else
{
	echo "database connected";
}
$sql="SELECT * FROM php3";
if($result=$conn->query($sql))
{
	print_r ($result);
}
if($result->num_rows)
{
	while($row=$result->fetch_object())
	{
		$record[]=$row;
	}
	$result->free();
}
foreach ($record as $r)
{
	echo "<br>Name:".$r->name;
	echo "<br>";
	echo "occupation:".$r->occupation;
	echo "<br>";
	echo "emailid:".$r->emailid;
	echo "<br>";
	echo "contactno:".$r->contactno;
	echo "<hr>";
}
?>