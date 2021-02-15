<?php
session_start();
include_once('function.php');
if(empty($_SESSION['status']) == 'login'){
	header('Location: Index.php');

	$get = $_SESSION['status'];

	echo $get;

	
}
?>

	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="codepixer">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<title>Art Museum</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>

		<body>
			<?php
			  	include_once('header.php');
			  ?>

			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							Tickets
							</h1>	
						</div>											
					</div>
				</div>
			</section>
	      <br>
	      <br>

	      <div>
			<center>
				<h1>Jenis Ticket</h1>
			</center>
		 </div>

	      	<section class="exibition-area section-gap" id="exhibitions">
			  <div class="container">
					<div class="row">
						<div class="active-exibition-carusel">
							<div class="single-exibition item">
								<img src="img/x.jpg" alt="">
								<br>
								<a href="#"><h4>Dewasa</h4></a>
								<h4 style="color: green"  >
									Rp. 20,000,-
								</h4>
						</div>

						<div class="single-exibition item">
								<img src="img/x2.jpg" alt="">
								<br>
								<a href="#"><h4>Anak - anak</h4></a>
								<h4 style="color: green"  >
									Rp. 15,000,-
								</h4>
						</div>

						<div class="single-exibition item">
								<img src="img/x.jpg" alt="">
								<br>
								<a href="#"><h4>Rombongan</h4></a>
								<h4 style="color: green"  >
									Rp. 150,000,-
								</h4>
						</div>
						
						<div class="single-exibition item">
								<img src="img/x2.jpg" alt="">
								<br>
								<a href="#"><h4>Syarat Pembelian Tiket</h4></a>
								<p>
									
								</p>
						</div>	
					</div>
					</section>


					<div>
						<center>
						<h1>History Pembelian</h1>
						</center>
					</div>
					<table class="tabel">
								<tr>
									<th>Kode Tiket</th>
									<th>Jenis Tiket</th>
									<th>Nama Pembeli</th>
									<th>Tanggal Pemesanan</th>
									<th>Harga</th>
									<th colspan="2">Aksi</th>
								</tr>
									<?php
									if($_SESSION['role'] == "admin") {
										$q = mysqli_query($conn,"select * from tiket");
										}
									if($_SESSION['role'] == "user"){
										$get_nama = $_SESSION['username'];
										$get_nama2 = mysqli_query($conn, "SELECT nama from user WHERE username = '$get_nama' ");
										$n = mysqli_fetch_array($get_nama2);
										$name = $n['nama'];
										$q = mysqli_query($conn, "SELECT * from tiket WHERE namaPembeli = '$name' ");
									}
										while($a = mysqli_fetch_array($q)){
									?>
								<tr>
									<td><?= $a['kodeTiket']?></td>
									<td><?= $a['kelas']?></td>
									<td><?= $a['namaPembeli']?></td>
									<td><?= $a['tglBerangkat']?></td>
									<td>Rp.<?= number_format($a['harga'],0,'.','.')?>,-</td>
									<td><a href="detail.php?detail=<?= $a['kodeTiket']; ?>">Detail</a></td>
									<?php if($_SESSION['role'] == "admin") : ?>
									<td><a href="delete_ticket.php?id=<?= $a['kodeTiket']; ?>">Hapus</a></td>
								<?php endif ?>
								</tr>
								<?php }?>
							</table>
						</div>
					</div>

				<div class="content">
				<?php if($_SESSION['role'] == "user") : 
					$get_nama = $_SESSION['username'];
					$get_nama2 = mysqli_query($conn, "SELECT nama from user WHERE username = '$get_nama' ");
					$n = mysqli_fetch_array($get_nama2);
					$name = $n['nama'];
					?>
				<center><a href="pesan.php?nama=<?= $name; ?>" class="btn btn-info" id="pesan">Pesan Tiket</a></center>
				<?php endif?> 

					<br>
					<br>
									
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Kami merupakan mahasiswa IT Del kelompok 8 yang sedang
									mengerjakan PA1.
								</p>
								<p class="footer-text">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script><i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Kelompok 6</a>
								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Ikuti Kami </h6>
								<p>Media Sosial Kami</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
					

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/imagesloaded.pkgd.min.js"></script>
			<script src="js/justified.min.js"></script>					
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	


		</body>
	</html>



