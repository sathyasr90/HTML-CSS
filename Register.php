<!Doctype html>
<html>
<head><title>creating table register</title>
<head>
<body>
<!--php code begins-->
<?php

//Determine if the value is set and Not null using isset() i.e user has submitted the form or not
if(isset($_POST['Register'])){

//get values of the Registration form submited by user

$name=$_POST['name'];
$username=$_POST['username'];
$user_password=$_POST['password'];
$email=$_POST['email'];

//create a connection with database session using mysqli_connect()
$conn = mysqli_connect("localhost","root","","session");
//check the connection
if (mysqli_connect_errno())
{
echo 'MySQLi Connection was not established: ' . mysqli_connect_error();
}

//insert records in register table in session database
$sql="insert into register(name,username,password,email,status,last_login) 
 VALUES('".$name."','".$username."','".$user_password."','".$email."','0',now())";

//run the above query using mysqli_query()
$result=mysqli_query($conn,$sql);

if($result)
{ 
 echo 'Record has been inserted succesfully';
}
else
{ 
echo 'Record has not been inserted succesfully'; 
}

//close the connection
mysqli_close($conn);
}

else
{
echo 'Please Submit the form first.'; 
}

?>
<!--php code ends-->
</body>
</html>