<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
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

.box h2 {
	margin: 0 0 30px;
	padding: 0;
	color: black;
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
		
</center>

<div class="box">
<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic;">Username / password salah</p>

<?php endif; ?>	 

<form action="login_process.php" method="POST">

	<ul>
	<center><h1 style="color : grey;">Login</h1></center>
			<div class="inputBox">
			<label for="username"></label>
			<input type="text" name="username" id="username" placeholder="Username">
	
		
			<div class="inputBox">
		<label for="password"></label>
			<input type="password" name="password" id="password" placeholder="Password">
		
		
				<center><button type="submit" name="login" id="button">Login</button></center>
	

		<p style="color : white; font-style: italic">Don't Have Any Account ?</p>	
		<a href="register.php"><p style="color: grey; size: 14;"><b>Sign Up</b></p>
	</ul>

	
</form>
</body>
</html>