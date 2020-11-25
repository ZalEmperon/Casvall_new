<?php
require ('server.php');
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('Location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("Location: login.php");
  }?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
		<!--Boostrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!--Font-->
		<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/c7a445a64d.js" crossorigin="anonymous"></script>
</head>
<body>
	<link rel="shortcut icon" href="favicon.ico">
	<div>
		<?php if (isset($_SESSION['success'])) : ?>
	      <div class="error success" >
	      	<h3>
	          <?php 
	          	echo $_SESSION['success']; 
	          	unset($_SESSION['success']);
	          ?>
	      	</h3>
	      </div>
	  	<?php endif ?>
		<?php if(isset($_SESSION['username'])): ?>
			<p>Logged as <strong><?= $_SESSION['username']; ?></strong></p>
		<?php endif ?>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="index.php"><span class="navlog">C</span> <span class="bran">Casvall</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAllMarkup" aria-controls="navbarNavAllMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAllMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-link nav-item active" href="index.php">Beranda</a>
					<a class="nav-link nav-item" href="menu.php">Menu</a>
					<a class="nav-link nav-item" href="lokasi.php">Lokasi</a>
					<a class="nav-link nav-item" href="pesan.php">Pesan</a>
					<a class="nav-item btn btn-primary" href="kontak.php">Kontak Kami</a>
					<a class="nav-item btn font-weight-bold" name="logout" href="index.php?logout='1'">Log out</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4"><span class="bolded">Cheap</span> Food<br>Makan sepuasnya dengan harga yang <span class="bolded">terjangkau</span></h1><br>
	    <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
	  </div>
	</div>
	<div class="container">
			<p class="paragraf1 text-center text-justify">Terletak di Jalanan yang sangat ramai, Restoran Casvall adalah tempat yang ideal untuk berkumpul dengan teman atau keluarga dan sangat terbuka. Melayani pengunjung dengan baik, dan ramah serta menyediakan makanan makanan cepat saji, sarapan, makanan penutup, dan makanan lainnya, ditambah minum minuman yang segar langsung dari tempatnya dan siap menemani aktivitasmu. Datang dan nikmatilah makanan favoritmu kapanpun. Pagi, siang, dan malam kami tetap buka
			</p>
	</div>
	<div>
		<img  class="makanan" src="https://www.worldofghibli.id/wp-content/uploads/2020/02/gambar-aneka-makanan.jpg">
	</div><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<hr>
					<p class="text2">SOCIAL MEDIA</p>
				<hr>
				<a href="https://www.facebook.com" class="link"> <i class="fab fa-facebook-square"></i> Facebook</a><br>
				<a href="https://www.instagram.com" class="link2"> <i class="fab fa-instagram"></i> Instagram</a><br>
				<a href="https://www.youtube.com" class="link3"> <i class="fab fa-youtube-square"></i> Youtube</a><br>
			</div>
			<div class="col-sm">
				<hr>
					<p class="text2">JAM BUKA</p>
				<hr>
				<p class="text3">Senin - Selasa: 08.00 - 22.00<br><br>
					Rabu - Kamis: 08.00 - 21.00<br><br>
					Jumat: 08.00 - 20.00<br><br>
					Sabtu - Minggu: 10.00 - 23.00<br>
				</p>
			</div>
			<div class="col-sm">
				<hr>
					<p class="text2">KONTAK</p>
				<hr>
				<p class="text3">0123 4567 8900<br><br>
					gregetbanget99@gmail.com<br><br>
					Jalan monas -Jakarta<br>
				</p>
			</div>
		</div>
	</div><br><br>
	<div class="Right">Copyright© 2020 - Bima. All Right Reserved</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>