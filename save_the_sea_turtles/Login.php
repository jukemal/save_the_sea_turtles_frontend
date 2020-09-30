<?php
$host="localhost";
$user="root";
$password="";
$dab="shelton_lanka";

$con=mysqli_connect($host,$user,$password);
 mysqli_select_db($con,$dab);
 if(isset($_POST['user'])){
	 $uname= $_POST['user'];
	 $pas= $_POST['pass'];
	 $s="SELECT * FROM register WHERE username ='".$uname."' AND password ='".$pas."' limit 1";
	 $result = mysqli_query($con,$s);
	 
	 if(mysqli_num_rows($result)==1){
		 header('Location:home.php');
		 }else{
			 echo"username or password is incorrect";
			 }
	 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save the sea turtle-Login page</title>
<link rel="stylesheet"type="text/css" href="style.css">
</head>

<body>
<div class="loginbox">
<!-- <img src="icons/customer-group-customers-forum-people-users-icon-2.jpg" class="user" /> -->
<h1>Login</h1>
<form method="POST" action="#" >
<p>Username</p>
<input type="text" name="user" placeholder="Enter Username" required>
<p>Password</p>
<input type="password" name="pass" placeholder="Enter Password" required>

<input type="submit" name="Login" value="Login" />

<a href="forgotPassword.php">Forget your password?</a><br>
<a href="Register.php">New registration? </a><br><br />



</form>
</div>
</body>
</html>
