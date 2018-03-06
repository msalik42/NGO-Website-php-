<?php
	session_start();
	$row = $_SESSION['row'];
	$str = "";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/basic_style.css">
	<link rel="stylesheet" type="text/css" href="css/settings.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<title>NGO</title>
</head>
<body>
	<?php include_once('tools/nav.php'); // navigation bar ?> 

	<div id="body">
		<center>
		<span style="color: #222; font-size: 20px; ">Welcome <?php echo $row['name']; ?></span>
		</center>
		<div id="settings">
			<p>Settings</p>
			<form action="../private/update_process.php" method="post">
				<?php echo $str; ?>
				<table>
					<tr>
						<th>Name</th>
						<td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><input type="text" name="address" value="<?php echo $row['address']; ?>"></td>
					</tr>
					<tr>
						<th>Contact</th>
						<td><input type="text" name="contact" value="<?php echo $row['contact']; ?>"></td>
					</tr>
					<tr>
						<th></th>
						<td><input type="submit" name="submit" value="Update"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<br>
	<?php include_once('tools/footer.php'); //footer?>
	<script type="text/javascript" src="js/slider.js"></script>



</body>
</html>