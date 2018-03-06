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
		
		<form>
			<center>
			<p>SignUp</p>
			<table>
				<tr>
					<td><input type="text" name="name" placeholder="Name"></td>
				</tr>
				<tr>
					<td><input type="email" name="email" placeholder="Email"></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Username"></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Password"></td>
				</tr>
				<tr>
					<td><input type="text" name="address" placeholder="Address"></td>
				</tr>
				<tr>
					<th></th>
					<td><input type="submit" name="submit" value="SignUp"></td>
				</tr>
			</table>

			<a href="signin.php">Already have an account?</a>
			</center>
		</form>
	</div>
	<br>
	<?php include_once('tools/footer.php'); //footer?>
	<script type="text/javascript" src="js/slider.js"></script>

</body>
</html>