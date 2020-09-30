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
	 
	 $INSERT = "INSERT into users (User, Pass) values(?, ?)";
	 
	 $stmt = $con->prepare($s);
			
			$stmt->execute();
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if($rnum==0){
				$stmt->close();
				$stmt = $con->prepare($INSERT);
				$stmt->bind_param("ssssii",  $uname, $pas);
				$stmt->execute();
				header('Location:admin-main.php');
			}else{
				echo"Someone alrady register using this email";
				}
				$stmt->close();
				$con->close();
			
	
		
	 }

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shelton Lanka-Registration page</title>
<link rel="stylesheet"type="text/css" href="register.css">
</head>

<body>
<div class="loginbox">
<img src="icons/customer-service-icon.png" class="user" />
<h1>Register</h1>
<form method="POST" action="#" >
  <table width="430" height="396">
  <tr>
    <td><table width="430" height="396">
      <tr>
        <td>Name</td>
        <td colspan="2"><input type="text" name="username" required /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td colspan="2"><input type="password" name="password" required /></td>
      </tr>
      
        <td><input type="submit" value="Submit" /></td>
      </tr>
    </table></td>
  </tr>
  </table>
</form>
</div>
</body>
</html>
