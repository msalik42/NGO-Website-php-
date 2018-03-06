<?php
	session_start();
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$address= $_POST['address'];
		$query = "UPDATE users SET name = '$name', contact= '$contact', address = '$address'";
		$result = mysqli_query($connection, $query);
		if(!$result){
			die("query failed at time of updation".mysqli_error($connection));
		}
		else{
			$row = $_SESSION['row'];
			$email = $row['email'];
			$query2 = "SELECT * from users WHERE `email` = '$email'";
			$result2 = mysqli_query($connection,$query2);
			$row2 = mysqli_fetch_array($result2);
			$_SESSION['row'] = $row2;
			$str = "Updated";
			mysqli_free_result($result2);	
			header("Location: ../public/settings.php");	
		}
	}

?>