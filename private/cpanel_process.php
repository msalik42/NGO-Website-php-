<?php
	session_start();
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username == "webingap@123" and $password == "password"){
			header("Location: ../cpanel/cpanelHome.php");
		}
		else{
			echo $username;
			echo $password;
			echo "wrong password";
		}
	}
?>