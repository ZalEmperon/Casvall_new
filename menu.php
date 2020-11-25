<!DOCTYPE html>
<html>
<head>
	<title>Menu Makanan</title>
		<!--Boostrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="css/style2.css">

		<!--Font-->
		<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/c7a445a64d.js" crossorigin="anonymous"></script>
</head>
<body>
	<link rel="shortcut icon" href="favicon.ico">
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
					<a class="nav-item btn font-weight-bold" href="index.php?logout=1">Log out</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="container">
		<p class="text-center m1 font-weight-bold" style="font-size: 35px;">Daftar Menu Makanan</p><hr style="width: "><br>
	</div>
	<div class="accordion" id="accordionExample">
	  <div class="card">
	    <div class="card-header m1" id="headingOne">
	      <h2 class="mb-0">
	        <button class="btn btn-link btn-block text-center collapsed font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;">
	          SARAPAN
	        </button>
	      </h2>
	    </div>
	    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
	      <div class="card-body text3">
	      	<h5 class="text-center">Sarapan</h5><br>
	      	<p>
	        Omelet<span style="float: right;"> Rp.20.500</span><br>
	        hidangan telur goreng yang disiapkan dengan cara mengocok telur dan menggorengnya dengan minyak goreng atau mentega panas di sebuah wajan<br><br>
	        Nasi Goreng<span style="float: right;"> Rp.25.500</span><br>
	        nasi yang digoreng dan diaduk dalam minyak goreng, margarin atau mentega, biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya<br><br>
	        Fish n Chips<span style="float: right;"> Rp.30.500</span><br>
	        Makanan ini terdiri dari ikan ditepungi dengan tepung roti dan dimakan bersama kentang goreng yang dipotong panjang<br><br>
	        Roti Bakar<span style="float: right;"> Rp.15.00</span><br>
	        kepingan roti yang dibakar atau dipanggang dengan proses radiasi termal sehingga roti menjadi lebih kecoklatan dan garing<br><br>
	        Telur dan daging<span style="float: right;"> Rp.28.500</span><br>
	        Telur goreng yang dihidangkan bersama daging yang dipotong tipis tipis<br><br>
	        Sereal<span style="float: right;"> Rp.12.000</span><br>
	        Makanan yang umumnya dimakan dingin, dan dimakan bersama susu, air atau yoghurt, atau dimakan langsung<br>
	        </p>
	      </div>
	    </div>
	  </div>

	  <div class="card">
	    <div class="card-header m2" id="headingTwo">
	      <h2 class="mb-0">
	        <button class="btn btn-link btn-block text-center collapsed font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration: none;">
	          MAKAN MALAM
	        </button>
	      </h2>
	    </div>
	    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
	      <div class="card-body text3">
	      	<h5 class="text-center">Makan Malam</h5><br>
	      	<p>
	        Steak<span style="float: right;"> Rp.45.000</span><br>
	        sepotong besar daging, biasanya daging sapi, dada ayam dan ikan sering kali dipotong menjadi steik lalu di goreng atau dipanggang<br><br>
	        Spagetti<span style="float: right;"> Rp.35.500</span><br>
	        pasta yang berbentuk panjang, tipis, silindris, dan padat lalu diberi saus dan bumbu<br><br>
	        Makaroni<span style="float: right;"> Rp.35.500</span><br>
	        asta yang bentuknya seperti pipa kecil yang bengkok membentuk busur. Makaroni biasanya diolah dengan saus krim dan kacang polong<br><br>
	        Risotto<span style="float: right;"> Rp.30.000</span><br>
	        hidangan nasi campur khas Italia Utara, yaitu beras yang dimasak dengan kaldu sehingga lengket menyerupai krim<br>
	        </p>
	      </div>
	    </div>
	  </div>

	  <div class="card">
	    <div class="card-header m3" id="headingThree">
	      <h2 class="mb-0">
	        <button class="btn btn-link btn-block text-center collapsed font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration: none;">
	          DESSERT
	        </button>
	      </h2>
	    </div>
	    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
	      <div class="card-body text3">
	      	<h5 class="text-center">Dessert</h5><br>
	      	<p>
	        Tiramissu<span style="float: right;"> Rp.33.000</span><br>
	        kue keju khas Italia dengan taburan bubuk kakao di atasnya<br><br>
	        Strawberry Cheese Cake<span style="float: right;"> Rp.25.500</span><br>
	        Adonan keju krim yang lembut gurih, dipadu dengan manis segar buah strawberry<br><br>
	        Eskrim Goreng<span style="float: right;"> Rp.20.000</span><br>
	        berupa es krim yang digoreng<br><br>
	        Pie Lemon<span style="float: right;"> Rp.17.500</span><br>
	        kulit kue dengan isi rasa lemon<br><br>
	        Choc a block<span style="float: right;"> Rp.30.000</span><br>
	        Pudding coklat dengan krim, karamel, kacang dan marsmellow<br>
	        </p>
	      </div>
	    </div>
	  </div>

	  <div class="card">
	    <div class="card-header m4" id="headingFour">
	      <h2 class="mb-0">
	        <button class="btn btn-link btn-block text-center collapsed font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="text-decoration: none;">
	          SNACK
	        </button>
	      </h2>
	    </div>
	    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
	      <div class="card-body text3">
	      	<h5 class="text-center">Snack</h5><br>
	      	<p>
	        Kripik Kentang<span style="float: right;"> Rp.10.500</span><br>
	        potongan tipis kentang yang digoreng deep fried atau dipanggang sampai garing<br><br>
	        Siomai<span style="float: right;"> Rp.14.000</span><br>
	        daging cincang yang dibungkus kulit yang tipis dari tepung terigu<br><br>
	        Biskuit Coklat<span style="float: right;"> Rp.5.000</span><br>
	        biskuit yang dilapisi cokelat, atau yang dibuat dengan mengganti sebagian tepung dengan bubuk coklat<br><br>
	        Pizza<span style="float: right;"> Rp.40.000</span><br>
	        adonan bundar dan pipih, yang dipanggang di oven dan biasanya dilumuri saus tomat serta keju dengan bahan makanan tambahan lainnya yang bisa dipilih<br><br>
	        Cilok<span style="float: right;"> Rp.10.000</span><br>
	        Tapioka yang kenyal dengan tambahan bumbu pelengkap seperti sambal kacang, kecap, dan saus<br>
	        </p>
	      </div>
	    </div>
	  </div>

	  <div class="card">
	    <div class="card-header m5" id="headingFive">
	      <h2 class="mb-0">
	        <button class="btn btn-link btn-block text-center collapsed font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="text-decoration: none;">
	          MINUMAN
	        </button>
	      </h2>
	    </div>
	    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
	      <div class="card-body text3">
	      	<h5 class="text-center">Minuman</h5><br>
	      	<p>
	        Es teh<span style="float: right;"> Rp.3.000</span><br>
	        Teh yang didinginkan dengan es batu<br><br>
	        Es Jeruk<span style="float: right;"> Rp.5.000</span><br>
	        Air jeruk yang didinginkan dengan es batu<br><br>
	        Es Teler<span style="float: right;"> Rp.8.000</span><br>
	       	buah-buahan yang disajikan dengan santan, dan susu kental manis<br><br>
	        Es Coklat<span style="float: right;"> Rp.5.000</span><br>
	        air coklat yang dicampur dengan es<br><br>
	        Jus Buah<span style="float: right;"> Rp.7.000</span><br>
	        Buah yang diblender dicampur dengan air dan gula<br>
	        </p>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="container m1" style="text-align: center">
		<p class="text-center font-weight-bold" style="font-size: 25px;">Ingin mengetahui lokasi restoran?</p>
		<a href="lokasi.php" class="btn btn-primary">Lokasi</a>
	</div><br>
	<hr class="o">
	<div class="container m1" style="text-align: center">
		<p class="text-center font-weight-bold" style="font-size: 25px;">Ingin memesan makanan?</p>
		<a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
	</div><br>
	<hr class="o"><br>
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