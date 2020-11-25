<?php
$conn = mysqli_connect("localhost", "root", "", "databes");
function registrasi($data){
	global $conn;
	$username = strtolower(stripslashes($data['username']));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);
	if($password !== $password2){
		echo'<script>alert("Konfirmasi password tidak sesuai");</script>';
		return false;
	}
}
?>