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
<form action="insert.php" method="post">
<table border=1px>
<tr><td>name</td><td><input type="text" name="name"></td></tr>
<tr><td>age</td><td><input type="text" name="age"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit"value="submit"></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
	$name =$_POST['name'];
	$age=$_POST['age'];
	if($name!=""&&$age!="")
	{
		$sql="INSERT INTO php1(name,age) VALUES ('$name',$age)";
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
?>
</body>
</html>