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
<html>
<body>
<form action="class1.php" method="post">
<table>
<tr><td>name</td><td><input type="text" name="name"></td></tr>
<tr><td>occupation</td><td><input type="text" name="occupation"></td></tr>
<tr><td>emailid</td><td><input type="text" name="emailid"></td></tr>
<tr><td>contactno</td><td><input type="text" name="contactno"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit"value="submit"></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
		$name=$_POST['name'];
		$occupation =$_POST['occupation'];
		$emailid =$_POST['emailid'];
		$contactno =$_POST['contactno'];
		if($name!=""&&$occupation!=""&&$emailid!=""&&$contactno!="")
	{
		$sql="INSERT INTO php3(name,occupation,emailid,contactno) VALUES ('$name','$occupation','$emailid','$contactno')";
		if($conn->query($sql))
		{
			echo "data stored";
		}
	else
		{
			echo "insert data failed";
		}	
	}
else
		{
			echo "all fields required";
		}
}

header('location=class1.php');
die();
?>

</body>
</html>