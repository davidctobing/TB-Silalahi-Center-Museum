<?php

require 'funtion.php';

if( isset($_POST["login"]) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];


	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

//cek username
	if(mysqli_num_rows($result)===1 )
	{
		//cek password
		$row = mysqli_fetch_assoc($result);
		 if (password_verify($password, $row["password"]) ) {

		 		header("location: mail.php");
		 		exit;
		 }

	}

	$error = true;




	
}


?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="login-wrap">
	<div class="login-html">
	<?php if( isset($error) ) : ?>
		<p style="color: white; font-style: italic;">Username / password salah</p>

<?php endif; ?>	 

		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
						<center><button type="submit" name="login" id="button">Login</button></center>
	
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
  
  

</body>

</html>
