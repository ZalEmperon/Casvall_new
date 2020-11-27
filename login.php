<?php 
require('server.php');
// cek status login
if(isset($_SESSION['username'])) {
	header("Location: index.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
	*{
		margin: 0;
		padding: 0;
		font-family: oswald;
	}
	body{
		background-image: url("img/kk4b.png");
		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
  		background-position: center;
	}
	.header{
		width: 30%;
		margin: 50px auto 0px;
		border-bottom: none;
		background: #616161;
		color: white;
		border-radius: 10px 10px 0px 0px;
		padding: 20px;
		text-align: center;
	}
	form{
		width: 30%;
		margin: 0px auto;
		background-color: white;
		border-radius: 0px 0px 10px 10px;
		padding: 20px;
	}
</style>
	<title>Login</title>
	<!--Boostrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style4.css">
		<!--Font-->
		<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/c7a445a64d.js" crossorigin="anonymous"></script>
		<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<div class="header">
		<h2 class="font-weight-bold">Login</h2>
	</div>
	<form method="POST" action="login.php">
		<?php include ('errors.php'); ?>
		<div class="container">
			<div class="form-group">
				<label style="font-size: 18px;" for="username"><strong>Username</strong></label>
				<input type="text" name="username" class="form-control" placeholder="Nama">
			</div>
			<div class="form-group">
				<label style="font-size: 18px;" for="password"><strong>Password</strong></label>
				<input type="password" name="password" class="form-control" placeholder="********">
			</div><br>
			<button type="submit" class="btn btn-primary" name="login">Login</button><br><br>
			<p>Belum mempunyai akun? <a href="registrasi.php">Buat Akun</a></p>
		</div>
	</form>
</body>
</html>