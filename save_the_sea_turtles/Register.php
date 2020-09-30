<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration page</title>
<link rel="stylesheet"type="text/css" href="register.css">
</head>

<body>
<div class="loginbox">

<h1>Register</h1>
<form action="insertreg.php" method="POST">
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
      <tr>
        <td width="30" height="20">Gender</td>
        <td width="50" height="15">Male
<input type="radio" name="gender" value="m" required /></td>
        <td width="83">Female
<input type="radio" name="gender" value="f" required /></td>
        <td width="156" height="15">&nbsp;</td>
      </tr>
      <tr>
        <td>Email</td>
        <td colspan="2"><input type="email" name="email" required /></td>
      </tr>
      <tr>
        <td>Phone No
          <select name="phoneCode" required>
            <option selected hidden value="">Select Code</option>
            <option value="977">977</option>
            <option value="978">978</option>
            <option value="979">979</option>
            <option value="973">973</option>
            <option value="972">972</option>
            <option value="974">974</option>
          </select></td>
        <td colspan="2"><input type="phone" name="phone" required /></td>
      </tr>
      <tr>
        <td><input type="submit" value="Submit" /></td>
      </tr>
    </table></td>
  </tr>
  </table>
</form>
</div>
</body>
</html>
