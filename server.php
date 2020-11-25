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

	if (empty ($username)) {
		array_push($errors, "Mohon isi Username");
	}
	if (empty ($email)) {
		array_push($errors, "Mohon isi Email");
	}
	if (empty ($password1)) {
		array_push($errors, "Mohon isi Password");
	}
	if ($password1 != $password2) {
		array_push($errors, "Konfirmasi password belum benar");
	}
	if (count($errors) == 0) {
		$password = md5($password1);
		$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
		mysqli_query($db, $sql);
	}
}
if(isset($_POST["login"])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	if (empty ($username)) {
		array_push($errors, "Mohon isi Username");
	}
	if (empty ($password)) {
		array_push($errors, "Mohon isi Password");
	}
	if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
	}
}
?>