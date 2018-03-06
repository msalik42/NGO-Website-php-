<?php
	session_start();
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$row_sess = $_SESSION['row'];
		$email = $row_sess['email'];
		$contact = $row_sess['contact'];
		$address = $row_sess['address'];
		$type = $_POST['type'];
		$description = $_POST['description'];
		if($type != "money"){
			$query = "INSERT INTO donate (`email`, `contact`, `address`, `type`, `description`)
					VALUES('$email', '$contact', '$address', '$type', '$description') ";
			$res = mysqli_query($connection, $query);
			if(!$res){
				die("Insertion failed".mysqli_error($connection));
			}
			else{
				$_SESSION['status'] = "Successfull";
				header("Location: ../public/donate.php");

			}
		}
		else{
			header("Location: ../public/moneyReceive.php");
		}

	}
?>