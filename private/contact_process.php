<?php
	session_start();
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = htmlentities($_POST['message']);
		
		$query = "SELECT * FROM contact WHERE `message` = '$message'";
		$result = mysqli_query($connection,$query);
		$row_count = mysqli_num_rows($result);
		if($row_count <= 0 ){
			$query = "INSERT INTO contacts (`name`, `email`, `subject`, `message`)
						VALUES('$name', '$email', '$subject', '$message') ";
			$res = mysqli_query($connection, $query);
			if(!$res){
				die("Insertion failed".mysqli_error($connection));
			}
			else{
					header("Location: ../public/contact.php");	
			}
		}
		else{
			die("<h1 style='text-align:center;'>You submitted same message again.. </h1> ");
		}

	}
?>