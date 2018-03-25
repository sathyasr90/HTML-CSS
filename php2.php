<?php
if (isset($_POST['submit']))
{
	$conn=mysqli_connect("localhost","root","","class1")
	$x=$_POST['sno'];
	$y=$_POST['name'];
	$query="insert into php1(sno,name)values('$x','$y')";
	$s=mysqli_query($conn,$query);
	echo mysqli_error($conn);
if($s)
	{
		echo "account created";
		include_once 'php1.php';
		}
	else
	{
		echo "account not created";
	}	
}
?>
