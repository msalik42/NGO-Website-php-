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
		<?php include_once('tools/image_slider.php'); //imgae slider ?>
	</div>
	<br>
	<?php include_once('tools/footer.php'); //footer?>
	<script type="text/javascript" src="js/slider.js"></script>

</body>
</html>