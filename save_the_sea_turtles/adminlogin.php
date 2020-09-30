<?php
$host="localhost";
$user="root";
$password="";
$dab="shelton_lanka";

$con=mysqli_connect($host,$user,$password);
 mysqli_select_db($con,$dab);
 if(isset($_POST['username'])){
	 $uname= $_POST['username'];
	 $pas= $_POST['password'];
	 $s="SELECT * FROM users WHERE User ='".$uname."' AND Pass ='".$pas."' limit 1";
	 $result = mysqli_query($con,$s);
	 
	 if(mysqli_num_rows($result)==1){
		 header('Location:admin-main.php');
		 }else{
			 echo"username or password is incorrect";
			 }
	 }

?>

<!DOCTYPE html >
<html>
<head>
<meta charset=utf-8" />
<title>Save the sea turtles-Admin login page</title>
<link rel="stylesheet"type="text/css" href="adminlogin.css">
</head>

<body>
<div class="loginbox">
<img src="icons/user.png"class="user" />
<h1>Admin Login</h1>
<form method="POST" action="#" >
<p>Username</p>
<input type="text" name="username" placeholder="Enter Username" required>
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" required>

<input type="submit" name="Login" value="Login" />


<a href="adminadding.php">New admin registration? </a><br><br />



</form>
</div>
</body>
</html>
