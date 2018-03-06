<?php
	session_start();
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM users WHERE `email` = '$email'";
		$result = mysqli_query($connection,$query);
		$row_count = mysqli_num_rows($result);
		if($row_count <= 0 ){
			$query = "INSERT INTO users (`name`, `email`, `contact`, `password`)
						VALUES('$name', '$email', '$contact', '$password') ";
			$res = mysqli_query($connection, $query);
			if(!$res){
				die("Insertion failed".mysqli_error($connection));
			}
			else{
				$query = " SELECT * FROM users WHERE `email` = '{$email}' ";
				$res = mysqli_query($connection, $query);
				$row = mysqli_fetch_array($res);
				if(!$res){
					die("query failed at time of retriving data".mysqli_error($connection));
				}
				else{
					$_SESSION['row'] = $row;
					header("Location: ../public/index.php");	
				}
			}
		}
		else{
			die("<h1 style='text-align:center;'>User already exist </h1> ");
		}

	}
?>