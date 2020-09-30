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
<!DOCTYPE html >
<html >
<head>
<meta charset=utf-8" />
<title>Save the sea turtles-Home page</title>
<link rel="stylesheet"type="text/css"  href="slider.css">
<link rel="stylesheet"type="text/css"  href="dropmen.css">
</head>

<body>
<div class="menu-bar">

<ul>
 <td width="20" height="44"><h1 class="main_title">Save the Sea turtles</h1> </td>
<li class=""><a href="home.php">Home</a></li>
<li><a href="informations.php">About Us</a></li>
<li><a href="conservation.php">Conservation Work</a>

</li>
<li><a href="takeaction.php">Take Action</a></li>
<li><a href="main.php">Sign Out </a></li>
</ul>

<div class="slidem"></div>


<div class="footer">
<div class="footer-content">

<div class="footer-section about">
<h1 class="logo-text"><span>Save </span> Sea turtles</h1><br>
<p>
Give a simple effect that will help to protect the sea turtles.	
</p><br>
<div class="conatct">
<span><i calss="phone"></i>071-559-7698</span><br>
<a href="#"><i class="email"></i>Savetheseaturtles.com</a>
</div>
</div>

<div class="footer-section links">
<h1 class="logo-text"><span>Informations </span></h1><br>
<ul>
<li><a href="getinvoled.php">Get Involved</a></li>
<li><a href="joincommunities.php">Join Communities</a></li>
<li><a href="reminders.php">Reminders</a></li>
<li><a href="predicting.php">Predictions</a></li>
</ul>
</div>

<div class="footer-section contact-form">
<h1 class="logo-text"><span>Contact Details </span></h1><br>
<form action="home.php" method="POST">
<input type="text" id="email" name="email" class="text-input contact-input" placeholder="Type email address..">
<textarea name="message" id="message" class="text-input contact-input" placeholder="Your massage"></textarea><br>
<button type="Submit" id="submit" name="submit" class="btn btn-big">
<i class="fas fa-envelope"></i>
Send
</button>
</form>
</div>



<div class="footer-bottom">
&copy; maleesha617@gmail.com | Designed by Maleesha Ranathunga
</div>
</div>
</div>

</body>
</html>