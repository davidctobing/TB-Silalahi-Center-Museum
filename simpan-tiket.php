<?php


require_once('function.php');
header('Location: ticket.php');

$kodeTiket = $_POST['kodeTiket'];
// $kodePesawat = $_POST['kodeS'];
$namaPembeli = $_POST['namaPembeli'];
// $berangkat = $_POST['berangkat'];
// $tujuan = $_POST['tujuan'];
$tglBerangkat = $_POST['tglBerangkat'];
// $waktuBerangkat = $_POST['waktuBerangkat'];
// $waktuSampai = $_POST['waktuSampai'];
$harga = $_POST['harga'];
// $noKursi = $_POST['noKursi'];
$kelas = $_POST['kelas'];
$total = $harga;

$q= mysqli_query($conn, "insert into tiket values(NULL, '$kodeTiket','$namaPembeli','$tglBerangkat','$harga','$kelas','$total')");
if($q){
	$p = mysqli_query($conn, "insert into transaksi values(NULL, '$kodeTiket','$total')");
	if($p){
	echo say("Berhasil","index.php?act=data-tiket");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Selamat Anda Berhasil</h1>

</body>
</html>
