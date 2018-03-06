<?php
	session_start();
	if(isset($_SESSION['row'])){
		$row = $_SESSION['row'];	
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/basic_style.css">
	<link rel="stylesheet" type="text/css" href="css/donate.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<title>NGO</title>
</head>
<body>
	<?php include_once('tools/nav.php'); // navigation bar ?> 

	<div id="body">
		<center>
		<span style="color: #222; font-size: 20px; ">Welcome 
			<?php
				if(isset($_SESSION['row'])){
					echo $row['name']; 
				} 
			?>
		</span>
		</center>
		<p>Donate</p>
		<form action="../private/donate_process.php" method="post">
			<center>
				<span style="color: green; font-size: 30px; font-weight: bolder; letter-spacing: 2px;">
					<?php if(isset($_SESSION['status'])){echo $_SESSION['status'];} ?>
				</span>
			</center>
			<table>
				<tr>
					<td>
						<span>Donation Type:</span>
						<select name="type">
							<option value="food">Food</option>
							<option value="cloth">Cloth</option>
							<option value="money">Money</option>
						</select>
						<br>
					</td>
				</tr>
				<tr>
					<td>
						
						<textarea type="text" name="description" placeholder="Description"></textarea><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<br>
	<?php include_once('tools/footer.php'); //footer?>
	<script type="text/javascript">
		function openInNewTab() {
  			
		}
	</script>
	<?php
		$_SESSION['status'] = " ";
	?>
</body>
</html>