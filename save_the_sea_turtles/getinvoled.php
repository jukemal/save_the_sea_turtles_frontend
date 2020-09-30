<?php
			if(isset($_POST["submit"]))
			{
				$nam=$_POST["tname"];
				$det=$_POST["tdetails"];
				$img=$_POST["fileToUpload"];
				$phon=$_POST["tcontact"];
				
$conn=mysqli_connect("localhost","root","","shelton_lanka");
		
		if(!$conn)
		{
			die("Message cannot be sent some informations may be wrong plese recheck");
		}
		
		$sql="INSERT INTO `getinvolved`(`id`, `name`, `details`, `images`, `contact`) VALUES(NULL, '".$nam."', '".$det."', '".$img."','".$phon."');";
		
				
				
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
<title>Get Involved</title>
<link rel="stylesheet" href="getinvoled.css" />

</head>

<body>

<div class="contact-form">
<form id="contact-form" method="post" action="getinvoled.php">
<h1>Get Involved</h1>
<div class="txtb">
<label>Full name :</label>
<input type="text" name="tname" id="tname"  placeholder="Enter your Name" required="required">
</div>
<div class="txtb">
<label>Details :</label>
<input type="text" name="tdetails"  id="tdetails" placeholder="Enter your details" required="required">
</div>
<div class="txtb">
<label>Select image to upload:</label>
<!-- <input type="text" name="timages"  id="timages" placeholder="Enter your Phone Number" required="required"> -->
 <input type="file" name="fileToUpload" id="fileToUpload" required="required">
</div>
<div class="txtb">
<label>Phone number :</label>
<textarea name="tcontact" id="tcontact" placeholder="Type your phone number" required="required"></textarea>
</div>
<button class="btn" id="submit" name="submit" type="submit">Send</button>
</form>


</div>

<div class="contact-form2">
	<P>Involved and help to protect the sea turtles</P>
</div>
</body>
</html>