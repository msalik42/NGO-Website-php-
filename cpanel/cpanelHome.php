<?php
	session_start();
	require_once("../private/connection.php");	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
		}
		#head{
			border: 1px solid #222;
			height: 50px;
			width: auto;
			padding: 10px;
			background: #222;
		}
		#head ul{
			list-style: none;
			float: right;
			background: #222;
		}
		#head ul li{
			float: left;
			width: 100px;
			height: 20px;
			padding: 10px;
			font-size: 20px;
			color: #fff;

		}
		#head ul li:hover{
			border-bottom: 4px solid #E8AB19;
			color: #E8AB19;
		}
		#body{
			border: 1px solid #222;
			width: auto;
			height:300px;
		}
		#body #food{
			width: 100%;
			height: 200px;
			background: blue;
		}
		#body #cloth{
			width: 100%;
			height: 100px;
			background: lightblue;
		}
	</style>
</head>
<body>
	<div id="head">
			<ul style="float: left; color: #fff; font-size: 40px; font-weight: bold; margin-top: 0;">
				Cpanel
			</ul>
			<ul style="float: right;">
				<li onclick="dispFood()">FOOD</li>
				<li onclick="dispCloth()" >CLOTH</li>
			</ul>
	</div>
	<div id="body">
		<div id="food">
			<?php
				$query = "SELECT * FROM donate WHERE `type` = 'food'";
				$result = mysqli_query($connection,$query);
				if(!$result){
					echo "query failed".mysqli_error($connection);
				}else{
					$row = mysqli_fetch_array($result);
					while($list = $row){
						echo $list['email'];
						echo $list['description'];
						echo "<br>";
					}
				}

			?>
		</div>
		<div id="cloth">
			<?php
				echo "cloth";
			?>
		</div>
	</div>
	<div id="footer">
		
	</div>
	<script type="text/javascript">
		var food = document.getElementById("food");
		var cloth = document.getElementById("cloth");
		cloth.style.display = "none";
		function dispFood(){
			food.style.display = "block";
			cloth.style.display = "none";
		}
		function dispCloth(){
			food.style.display = "none";
			cloth.style.display = "block";
		}	

	</script>
</body>
</html>