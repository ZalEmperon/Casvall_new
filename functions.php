<?php

// fungsi query untuk mengambil data pada tabel lalu menyimpan ke array assosiative
// parameternya berupa syntax query mysql
function query($query){
	// membuat variabel $db dapat digunakan di fungsi ini (wajib require 'server.php terlebih dahulu')
	global $db;

	// lakukan query
	$result = mysqli_query($db, $query);
	// mengecek jika berhasil diambil atau tidak
	// jika tidak
	if( !$result ){
		// tampilkan pesan kesalahan dan berhentikan script
		echo mysqli_error($db);
		exit();
	}
	else{
		// jika berhasil
		// membuat tempat agar data yang diambil disimpan dalam bentuk array
		$rows = [];
		// mengambil satu persatu data dari 'tempat' tabel dan menyimpannya ke $rows dalam bentuk array associative
		while ( $row = mysqli_fetch_assoc($result) ){
			$rows[] = $row;
		}
		// mengembalikan nilai $rows untuk fungsi ini dan mengakhiri fungsi
		return $rows;
	}
}
?>