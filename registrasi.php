<?php 
require('server.php');
// cek status login
if(isset($_SESSION['username'])) {
	header("Location: index.php");
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
		background-image: url("img/kk4bb.png");
		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
  		background-position: center;
	}
	.header{
		width: 30%;
		margin: 50px auto 0px;
		border-bottom: none;
		background: white;
		border-radius: 10px 10px 0px 0px;
		padding: 20px;
		text-align: center;
	}
	form{
		width: 30%;
		margin: 0px auto;
		background-color: #616161;
		border-radius: 0px 0px 10px 10px;
		padding: 20px;
	}
</style>
	<title>Registrasi</title>
	<!--Boostrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style4.css">
		<!--Font-->
		<link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://kit.fontawesome.com/c7a445a64d.js" crossorigin="anonymous"></script>
		<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<div class="header">
		<h2 class="font-weight-bold">Register</h2>
	</div>
		<form method="POST" action="registrasi.php">
			<?php include ('errors.php'); ?>
			<div class="container">
				<div class="form-group">
					<label style="font-size: 18px;" for="username"><strong>Username</strong></label>
					<input type="text" name="username" class="form-control" placeholder="Nama" value="<?php echo $username ?>">
				</div>
				<div class="form-group">
					<label style="font-size: 18px;" for="email"><strong>Email</strong></label>
					<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
				</div>
				<div class="form-group">
					<label style="font-size: 18px;" for="password"><strong>Password</strong></label>
					<input type="password" name="password1" class="form-control" placeholder="********">
				</div>
				<div class="form-group">
					<label style="font-size: 18px;" for="password2"><strong>Konfirmasi Pasword</strong></label>
					<input type="password" name="password2" class="form-control" placeholder="********">
				</div><br>
				<button type="submit" class="btn btn-primary" name="register">Register Sekarang</button><br><br>
				<p style="color: white">Sudah mempunyai akun? <a href="login.php">Login</a></p>
			</div>
		</form>
</body>
</html>