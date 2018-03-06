<?php
	session_start();
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'";
		$result = mysqli_query($connection, $query);
		if(!$result){
			die("query failed at time of login".mysqli_error($connection));
		}
		else{
			$row = mysqli_fetch_array($result);
			$_SESSION['row'] = $row;
			if($row['email'] == $email && $row['password'] == $password ){
					header("Location: ../public/index.php");
			}
			else{
				echo "<h1 style='text-align:center:'> oh!! somthig wronng!!!<h1>";
			}
			mysqli_free_result($result);
		}
	}

?>