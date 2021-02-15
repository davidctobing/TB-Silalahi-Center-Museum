<?php
if(isset($_POST['kirim'])){
			$komen=$_POST['pesan'];
			$conn = mysqli_connect("localhost","root","","phpdasar");
			$result = mysqli_query($conn,"INSERT INTO user (komentar) VALUES ('$komen')");
			if($result){
				echo "<script>alert('SUKSES');</script>";
				header("ticket.php")
			}
		}
?>