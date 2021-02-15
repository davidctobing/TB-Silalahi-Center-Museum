<?php

session_start();

	require 'function.php';
	
		if(isset($_POST["register"])) {
			if (registrasi($_POST) > 0) {
				echo "<script>
				alert('user baru berhasil ditambahkan!');
				</script>";
			}
			else{
				echo mysqli_error($conn);
			}

		}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<style >
		label
		{
			display: block;
		}

		body{
			background-image: url(img/header-bg.jpg);
			background-size: cover;
			background-attachment: fixed;
		}

		.box {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 400px;
	padding: 40px;
	background: rgba(0,0,0,.8);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
	border-radius: 10px;
}

.box h1 {
	margin: 0 0 30px;
	padding: 0;
	color: #FFF;
	text-align: center;
}

.box .inputBox {
	position: relative;
}
.box .inputBox input {
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: #FFF;
	letter-spacing: 1px;
	margin-bottom: 30px;
	border: none;
	border-bottom: 1px solid #FFF;
	outline: none;
	background: transparent;
}
.box .inputBox label {
	position: absolute;
	top: 0;
	left: 0;
	padding: 10px 0;
	font-size: 16px;
	color: #FFF;
	pointer-events: none;
	transition: .5s;
	animation: LabelOnLoad 1s forwards 0s ease;
}

#button{
	background: transparent;
	border: none;
	outline: none;
	color: #FFF;
	background: #03A9F4;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 5px;
	font-size: 14px;
}


	</style>
</head>
<body>
<center>

	<form action="" method="POST">
	<div class="box">
		<form action="">
			<h1>Registrasi</h1>
			<div class="inputBox">
					<label for="username"></label>
				<input type="text" name="username" id="username" placeholder="Username">
				<br>
			</div>

			<div class="inputBox">
					<label for="name"></label>
				<input type="text" name="name" id="name" placeholder="Nama Lengkap">
				<br>
			</div>

			<div class="inputBox">
				<label for="password"></label>
				<input type="password" name="password" id="password" placeholder="password">
			</div>

			<div>
				<div class="inputBox">
				<label for="password2"></label>
				<input type="password" name="password2" id="password2" placeholder="Konfirmasi Password"><br>
			</div>

			<input type="hidden" name="role" value="user">


		<button type="submit" name="register" id="button">Registrasi</button>
			<b><p style="color : white;">Back To Login</p></b>
			<a href="login.php"><p style="color : blue;">Click Here</p>


		
	</form>

</center>
</body>
</html>