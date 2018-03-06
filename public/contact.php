<?php
	session_start();
	if(isset($_SESSION['row'])){
		$row = $_SESSION['row'];	
	}
	
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/basic_style.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<title>NGO</title>
</head>
<body>
	<?php include_once('tools/nav.php'); // navigation bar ?> 
	<div id="body">
			<div id="address">
				<ul>
					<li><i class="fas fa-map-marker-alt" style="color: #97190D;"></i>
							<span>  CSJM University, Kanpur</span>
					</li>
					<li><i class="fas fa-mobile-alt" style="color: #09631D"></i>
							<span>  Mobile No: +91 7400100020</span>
					</li>
					<li><i class="fas fa-envelope" style="color: #97190D"></i>
							<span>  Email: info@webingap.com</span>
					</li>
				</ul>
			</div>
			<div id="form">
					<span>Contact</span>
					<br>
					<br>
				<form action="../private/contact_process.php" method="post">
						<table>
							<tr >
								<td><input type="text" name="name" placeholder="Name"></td>
							</tr>
							<tr>
								<td ><input type="email" name="email" placeholder="Email"></td>
							</tr>
							<tr>
								<td><input type="text" name="subject" placeholder="Subject"></td>
							</tr>
							<tr>
								<td><textarea id="msg" placeholder="Message" name="message"></textarea></td>
							</tr>
							<tr>
								<td><input type="submit" name="submit" value="submit"></td>
							</tr>
						</table>
				</form>
			</div>
			<br>
			<div style="width: 100%;">
				
			</div>
	</div>
	<br>
	<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.588699261834!2d80.26482401080636!3d26.501184743677914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c379b20f42091%3A0xae241bc2747c4025!2sDepartment+of+Bioinformatics%2C+University+Institute+of+Engineering+%26+Technology!5e0!3m2!1sen!2sin!4v1519998992559" width="100%" height="300" style="margin: 0 auto;">
   </iframe>
	</div>
	<div style="width: 100%; clear: both;">
	<?php include_once('tools/footer.php'); //footer?>
	</div>
</body>
</html>