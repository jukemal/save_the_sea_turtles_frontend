<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Account Recovery</title>
<link rel="stylesheet" type="text/css" href="forgotPasswordCSS.css">
	
	<script>
	function validatePhoneNumber(){
		var phone=document.getElementById("txt_phone").value;
		if(phone.length!=10 || isNaN(phone))
			{
				alert("Enter valid phone number");
			}
		else
		{
			alert("Sent");s
		}
		
	}
		
	</script>	
	
</head>

<body>
	<form method="post">

	<table width="821" height="182" border="0" cellpadding="1" cellspacing="1">
  <tbody>
    <tr>
      <th colspan="2" scope="row">Enter the registered phone number(You will get the message to this number)</th>
    </tr>
    <tr>
      <th width="466" height="79" scope="row"><input type="text" name="txt_phone" id="txt_phone" placeholder="Enter phone number" ></th>
		
      <th width="348" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row"><input type="submit" value="Send password" onClick="validatePhoneNumber()"></th>
      <th scope="row"><a href="login.php"><font color="white" size="+1">Return to login page</font></a></th>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>