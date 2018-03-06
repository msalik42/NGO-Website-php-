	<div id="header">
		<table style="width: 100%;">
			<tr>
				<td>
					<ul style="float: left; width: 35%;">
						<a href=""><li>NGO_INDIA</li></a>
					</ul>
				</td>
				<td style="float: left; width: 100%;">
					<ul style="float: right;">
						<a href="index.php"><li>HOME</li></a>		
						<a href="about.php"><li>ABOUT</li></a>
						<a href="contact.php"><li>CONTACT</li></a>
						<?php
							if(isset($_SESSION['row'])){
								echo "<a href='donate.php'><li>DONATE</li></a>";
								echo "<a href='settings.php'><li>SETTINGS</li></a>";
								echo "<a href='logout.php'><li>LOGOUT</li></a>";
							}else{
								echo "<a href='signin.php'><li>LOGIN</li></a>";
							}

						?>
					</ul>
				</td>
			</tr>
		</table>
	</div>