<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/basic_style.css">
	<link rel="stylesheet" type="text/css" href="css/login_form.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<title>NGO</title>
</head>
<body>
	<?php include_once('tools/nav.php'); // navigation bar ?> 
	<div id="body">

		<form action="../private/signin_process.php" method="post">
			<center>
			<p>SignIn</p>
			<table>
				<tr><input type="email" name="email" placeholder="email"></tr>
				<tr><input type="password" name="password" placeholder="Password"></tr><br>
				<tr><input type="submit" name="submit" value="Login"></tr>
			</table>

			<a href="">Forgot Password?</a>
			<a href="signup.php">Create an account?</a>
			</center>
		</form>
	</div>
	<br>
	<?php include_once('tools/footer.php'); //footer?>
	<script type="text/javascript" src="js/slider.js"></script>

</body>
</html>