<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect("localhost","root","","phpdasar");


function registrasi($data)
{
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$name = $data["name"];
	$role = $data["role"];
	$password = mysqli_real_escape_string($conn,$data["password"]);
	$password2 = mysqli_real_escape_string($conn,$data["password2"]);



	//cek konfirmasi password

	if($password !== $password2)
	{
		echo "<script>
			alert('konfirmasi password tidak sesuai');
			</script>";
			return false;
	}
		//enskripsi
	$password = password_hash($password, PASSWORD_DEFAULT);

		//tambah ke database
	mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password','$role','$name')");

	return mysqli_affected_rows($conn);

}

function deleteTicket($id){
	global $conn;

	$delete = mysqli_query($conn, "DELETE FROM tiket WHERE kodeTiket = '$id' ");
	return mysqli_affected_rows($conn);
}

?>