 <?php
			if(isset($_POST["submit"]))
			{
				$nam=$_POST["tname"];
				$emai=$_POST["temail"];
				$phon=$_POST["tphone"];
				$messag=$_POST["tmessage"];
				
$conn=mysqli_connect("localhost","root","","shelton_lanka");
		
		if(!$conn)
		{
			die("Message cannot be sent some informations may be wrong plese recheck");
		}
		
		$sql="INSERT INTO `takeaction`(`id`, `Name`, `Email`, `PhoneNo`, `Message`) VALUES(NULL, '".$nam."', '".$emai."', '".$phon."','".$messag."');";
		
				
				
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Take Action</title>
<link rel="stylesheet" href="takeaction.css" />

</head>

<body>
<ul style="list-style:none">
<li><a class="home_link" href="home.php">Home</a></li>
</ul>
<div >
	<div class="contact-form">
	<form id="contact-form" method="post" action="takeaction.php">
	<h1>Take Action</h1>
	<div class="txtb">
	<label>Full name :</label>
	<input type="text" name="tname" id="tname"  placeholder="Enter your Name" required="required">
	</div>
	<div class="txtb">
	<label>Email :</label>
	<input type="text" name="temail"  id="temail" placeholder="Enter your Email" required="required">
	</div>
	<div class="txtb">
	<label>Phone number :</label>
	<input type="text" name="tphone"  id="tphone" placeholder="Enter your Phone Number" required="required">
	</div>
	<div class="txtb">
	<label>Message :</label>
	<textarea name="tmessage" id="tmessage" placeholder="Type your Message" required="required"></textarea>
	</div>
	<button class="btn" id="submit" name="submit" type="submit">Report</button>
	</form>

	</div>
	
</div>
</body>
</html>