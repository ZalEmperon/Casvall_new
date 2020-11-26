<?php
session_start();
$username = "";
$email = "";
$errors = array();
$db = mysqli_connect("localhost", "root", "", "databes");
if(isset($_POST["register"])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password1 = mysqli_real_escape_string($db, $_POST['password1']);
	$password2 = mysqli_real_escape_string($db, $_POST['password2']);

	// cek email yang sama
	$cekQuery1 = "SELECT * FROM user WHERE email = '$email'";
	$cekEmail = mysqli_query($db, $cekQuery1);

	// cek username yang sama
	$cekQuery2 = "SELECT * FROM user WHERE username = '$username'";
	$cekUsername = mysqli_query($db, $cekQuery2);

	// Jika saat registrasi, email sudah terdaftar
	if(mysqli_num_rows($cekEmail) > 0) {
		array_push($errors, "Email telah terdaftar!");
	}	
	// Jika saat registrasi, username sudah terdaftar
	if(mysqli_num_rows($cekUsername) > 0) {
		array_push($errors, "Username telah terdaftar!");
	}
	if (empty($username)) {
		array_push($errors, "Mohon isi Username");
	}
	if (empty($email)) {
		array_push($errors, "Mohon isi Email");
	}
	if (empty($password1)) {
		array_push($errors, "Mohon isi Password");
	}
	if ($password1 != $password2) {
		array_push($errors, "Konfirmasi password belum benar");
	}
	if (count($errors) == 0) {
		// enkripsi password dengan hash
		$password = password_hash($password1, PASSWORD_DEFAULT);
		$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
		mysqli_query($db, $sql);

		// redirect dan kasih pesan berhasil
		echo "<script>
				alert('Registrasi berhasil! Silahkan login')
				window.location.href = 'login.php'
			</script>";
	}
}
if(isset($_POST["login"])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Mohon isi Username");
	}
	if (empty($password)) {
		array_push($errors, "Mohon isi Password");
	}

	// Cek apakah usernamenya valid
	$cekAkun = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");
	// Jika usernamenya valid (akun terdaftar)
	if(mysqli_num_rows($cekAkun) == 1) {
		// Jika begitu, ambil data akunnya (data dalam array associative)
		$akun = mysqli_fetch_assoc($cekAkun);

		// Cek password akunnya
		if(password_verify($password, $akun['password'])) {
			// Jika berhasil, set session login username / passwordnya
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
		} else {
			$error = 1;
		}
	} else {
		$error = 1;
	}

	// Jika ada error pada username / password
	if(isset($error)) {
		array_push($errors, "Username/Password tidak cocok");
	}

	if(count($errors) == 0) {
		header("Location: index.php");
	}



	// if (count($errors) == 0) {
	//   	$password = md5($password);
	//   	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	//   	$results = mysqli_query($db, $query);
	//   	if (mysqli_num_rows($results) == 1) {
	//   	  $_SESSION['username'] = $username;
	//   	  $_SESSION['success'] = "You are now logged in";
	//   	  header("Location: index.php");
	//   	} else {
 //  		array_push($errors, "Wrong username/password combination");
 //  		}
	// }
}
?>