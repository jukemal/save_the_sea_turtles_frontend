 <?php
			if(isset($_POST["submit"]))
			{
				
				$emai=$_POST["email"];
				$messag=$_POST["message"];
				
$conn=mysqli_connect("localhost","root","","shelton_lanka");
		
		if(!$conn)
		{
			die("Message cannot be sent some informations may be wrong plese recheck");
		}
		
		$sql="INSERT INTO `messages`(`ID`, `Email`, `Message`) VALUES(NULL,'".$emai."','".$messag."')";
		
				
				
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Message sent sucessfully');</script>";
		}
		else
		{
			echo "<script>alert('Some problem occure plese send it again');</script>";
		}

			}
			
			?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset=utf-8" />
<title>Save the Sea Turtle-Main page</title>
<link rel="stylesheet" type="text/css" href="main.css"/>

</head>

<script language="javascript">
function click()
{
	if(email.text=="")
    {
    	alert="message sent";
    }
}
</script>


<body>
<div class="menu-bar">
<div>
<ul>
<td width="30" height="44">

		<h1 class="main_title">Save the Sea turtles</h1>

</td> 

<li><a href="informations.php">About Us</a>
</li>
<li><a href="#">People</a></li>


<li><a href="contactus.php">Contact Us</a></li>
<li><a href="#">Login info </a>
<div class="sub-menu-1">
<ul>
<li><a href="login.php">Sign in</a></li>
<li><a href="adminlogin.php">Admin Login</a></li>

</ul>
</div>
</li>
</ul>
</div>
</div>

<div class="slidem"></div>


<div class="footer">
<div class="footer-content">

<div class="footer-section about">
<h1 class="logo-text"><span>Save </span> Sea Turtles</h1><br>
<p>
Give a simple effect that will help to protect the sea turtles.	
</p><br>
</div>




<div class="footer-section contact-form">
<h1 class="logo-text"><span>Any Comments</span></h1><br>
<form action="main.php" method="POST">
<p>
	<input type="email" id="email" name="email" id="email" class="text-input contact-input" placeholder="Type email address..">
  	<textarea name="message" id="message" class="text-input contact-input" placeholder="Your massage"></textarea>
 	 <br>
	  <button  type="Submit" id="submit" name="submit" class="big_btn" width="50px" onclick="click()">Send</button>
</p>
</form>
</div>



</div>

</body>
</html>
