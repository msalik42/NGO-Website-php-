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
			height:400px;
		}
		#body #food{
			width: 100%;
			height: 400px;
			background: #fff;
		}
		#body #cloth{
			width: 100%;
			height: 400px;
			background: lightblue;
		}
		#table{
			width: 80%;
			border: none;
		}
		tr{
			border: none;
		}
		td{
			border: none;
			margin: 0;
		}
		th{
			border: none;
			margin: 0;
		}
		#title .email{
			width: 25%;
			background: #222;
			color: #fff;
		}
		#title .contact{
			background: #222;
			width: 10%;
			color: #fff;
		}
		#title .date{
			background: #222;
			width: 9%;
			color: #fff;
		}
		#title .time{
			background: #222;
			width: 6%;
			color: #fff;
		}
		#title .description{
			background: #222;
			width: 50%;
			color: #fff;

		}
		#title{
			border: 1px solid #dddddd;
		}
		#title th{
			text-align: left;
			font-weight: bold;
			font-size: 20px;
			padding: 5px;
		}
		#items td{
			padding-left: 5px;
		}
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
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
				/*
				$query = "SELECT * FROM donate WHERE `type` = 'food'";
				$result = mysqli_query($connection,$query);
				if(!$result){
					echo "query failed".mysqli_error($connection);
				}else{
					while($list = mysqli_fetch_array($result)){
						echo $list['email'];
						echo $list['description'];
						echo "<br>";
					}
				}
				*/
			?>
			<br>
			<table id="table">
				<tr id="title">
					<th class="email">Email</th>
					<th class="contact">Contact</th>
					<th class="date">Date</th>
					<th class="time">Time</th>
					<th class="description">Description</th>
				</tr>
	<?php
		$query = "SELECT * FROM donate WHERE `type` = 'food' order by `date` desc";
		$result = mysqli_query($connection,$query);
		if(!$result){
			echo "query failed".mysqli_error($connection);
		}else{
			while($list = mysqli_fetch_array($result)){
				echo "<tr id='items'>";
				echo "	<td class='email'>".$list['email']."</td>";
				echo "	<td class='contact'>". $list['contact'] ."</td>";
				echo "	<td class='date'>". substr($list['date'], 0,10) ."</td>";
				echo "	<td class='time'>". substr($list['date'], 10) ."</td>";
				echo "	<td class='description'>". $list['description'] ."</td>";
				echo "</tr>";
			}
		}		
	?>
			</table>
		</div>
		<div id="cloth">
			<br>
			<table id="table">
				<tr id="title">
					<th class="email">Email</th>
					<th class="contact">Contact</th>
					<th class="date">Date</th>
					<th class="time">Time</th>
					<th class="description">Description</th>
				</tr>
	<?php
		$query = "SELECT * FROM donate WHERE `type` = 'cloth' order by `date` desc";
		$result = mysqli_query($connection,$query);
		if(!$result){
			echo "query failed".mysqli_error($connection);
		}else{
			while($list = mysqli_fetch_array($result)){
				echo "<tr id='items'>";
				echo "	<td class='email'>".$list['email']."</td>";
				echo "	<td class='contact'>". $list['contact'] ."</td>";
				echo "	<td class='date'>". substr($list['date'], 0,10) ."</td>";
				echo "	<td class='time'>". substr($list['date'], 10) ."</td>";
				echo "	<td class='description'>". $list['description'] ."</td>";
				echo "</tr>";
			}
		}		
	?>
			</table>
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