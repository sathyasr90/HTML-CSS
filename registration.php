<!Doctype html>
<html>
<head><title>Simple Registration form in PHP</title>
<style>
.margin
{
margin-top:15px;
}
</style>
</head>
<body>
 <!--Registration form -->
<form action="register.php" method="post">
<div class="margin">
Enter Name:
<input type="text" name="name" />
</div>
<div class="margin">
Enter Username:
<input type="text" name="username"/>
</div>
<div class="margin">
Enter Password:
<input type="password" name="password"/>
</div>
<div class="margin">
Enter E-mail Id:
<input type="email" name="email"/>
</div>
<div class="margin">
<input type="submit" name="Register" value="submit"/>
</div>
</form>
 <!--end of form-->
</body>
</html>