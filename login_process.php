<?php

session_start();

require 'function.php';

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	$cek = mysqli_num_rows($result);

	if($cek > 0){
		$data = mysqli_fetch_assoc($result);

		if($data['role']=="admin"){
			$_SESSION['status'] = true;
			$_SESSION['role'] = "admin";

			header("Location: Index.php");
		}

		else if($data['role']=="user"){
			$_SESSION['username'] = $username;
			$_SESSION['status'] = true;
			$_SESSION['role'] = "user";

			header("Location: ticket.php");
		}

		else{
			
			header("Location: login.php");
		}
	}
	?>