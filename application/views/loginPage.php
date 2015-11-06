<!DOCTYPE html>
<html>
<head>
<title>Movie Database Thing</title>
</head>
<body>
	<div align="center">
	<div id="login">
	Please Login<br />
<form method="POST">
	Username: <input type='text' name='username'/> <br /><br />
	Password: <input type='password' name='password'/><br /><br />
	<input type='submit' name='submit' value='Submit' /><br /><br />
</form>
	</div>
	</div>
</body>
 <?php 
       echo form_open('user_controller');

  ?>
</html>