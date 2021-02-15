<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pesan Tiket</title>
	
	<style type="text/css">
	.khusus{
		position: absolute;
		left: 35%;
		box-sizing: border-box;
		box-shadow: 0 15px 25px rgba(0,0,0.5);
		border-radius: 10px;
		height: 500px;
		width: 450px;
	
	}
	body{
		background-image: url(img/header-bg.jpg);
		background-size: cover; 
	}


	</style>
</head>
<link rel="stylesheet" type="text/css" href="pesan.css">
<body>
<br>
<br>
<br>
<br>
<table class="khusus">
<form action="simpan-tiket.php" method="post">
	

	<tr>
			<td>
<center><h2 style="">Pemesanan Ticket</h2></center></td>
	</tr>
	<tr>
		<td>Kode Tiket</td>
		<td>:</td>
		<td><input type="text" name="kodeTiket" class="input" value="<?= rand(0, 999999)?>"></input></td>
	</tr>


	<!-- <tr>
		<td>Kode Pesawat</td>
		<td>:</td>
		<td>
			<select name="kodeS" class="input">
				<option>KD001</option>
				<option>KD002</option>
				<option>KD003</option>
				<option>KD004</option>
				<option>KD005</option>
				<option>KD006</option>
			</select>
		</td>
	</tr> -->


	<tr>
		<td>Nama Pembeli</td>
		<td>:</td>
		<td>
			<?php if($_SESSION['role'] == "user") : 
				$name = $_GET['nama']; ?>
			<input type="text" name="namaPembeli" class="input" value="<?= $name; ?>" readonly="readonly" placeholder="Nama Pembeli"></input></td>
		<?php endif ?>
		<?php if($_SESSION['role'] == "admin") : ?>
			<input type="text" name="namaPembeli" class="input" required placeholder="Nama Pembeli" required=""></input></td>
		<?php endif ?>
	</tr>
	

	<!-- <tr>
		<td>Penerbangan</td>
		<td>:</td>
		<td><input type="text" name="berangkat" class="input"></input></td>
	</tr> -->
	<!-- <tr>
		<td>Tujuan</td>
		<td>:</td>
		<td><input type="text" name="tujuan" class="input" placeholder="Tujuan"></input></td>
		</tr> -->
	

	<tr>
		<td>Tanggal Pemesanan</td>
		<td>:</td>
		<td><input type="date" placeholder="Tanggal Pemberangkatan" name="tglBerangkat" class="input" required=""></input></td>
	</tr>
	

	<!--<tr>
		<td>Waktu Pemberangkatan</td>
		<td>:</td>
		<td><input type="time" name="waktuBerangkat" class="input" placeholder="Waktu Pemberangkatan"></input></td>
	</tr> -->
	<!-- 	<tr>
		<td>Waktu Sampai</td>
		<td>:</td>
		<td><input type="time" name="waktuSampai" placeholder="Waktu Sampai" class="input"></input></td>
	</tr> -->
	

	<tr>
		<td>Harga Tiket</td>
		<td>:</td>
		<td><input type="number" placeholder="Harga Tiket" name="harga" class="input" required=""></input></td>
	</tr>


<!-- 	<tr>
		<td>No Kursi</td>
		<td>:</td>
		<td><input type="text" name="noKursi" class="input" value="<?= rand(1, 100)?>"></td>
	</tr>

 -->	


 	<tr>
	<td>Jenis Ticket</td>
	<td>:</td>
	<td>
	<select name="kelas" class="input" required="">
	<option>Pilih Jenis Ticket</option>
	<option>Anak - anak</option>
	<option>Dewasa</option>
 		<option>Rombongan</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" class="submit kanan" value="Tambah" required=""></input></td>
	</tr>			
</form>
</table>
</body>
</html>