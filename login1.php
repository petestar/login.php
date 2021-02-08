<?php
include("process.php"); // include process for checking username and password
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body{
	background: #eee;
}
#frm{
border: solid gray 1px;
width: 20%;
border-radius: auto;
margin: 100px auto;
background: white;
padding: 50px;
}
#btn{
color: #fff
background: #337ab7;
padding: 5px;
margin-left: 69%;
}
</style>
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
		<p>
			<label>Username:</label>
			<input type="text" id="user" name="user" />
		</p>
		<p>
			<label>Password:</label>
			<input type="password" id="pass" name="pass" />
		</p>
		<p>
			<label>Password:</label>
			<input type="password" id="pass" name="pass" />
		</p>
		<p>
			<input type="submit" id="btn" value="login"/>
		</p>
		</form>
	</div>
<span><?php echo $error; ?></span>
</body>
</html>