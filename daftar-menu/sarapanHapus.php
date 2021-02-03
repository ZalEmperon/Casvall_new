<?php
require_once '../server.php';
require_once '../functions.php';
$id = $_GET['id'];
if(isset($id)){
	$hapus = "DELETE FROM sarapan WHERE id = '$id'";
	if(mysqli_query($db, $hapus)){
		echo "<script>
				alert('meow')
				window.location.href = 'sarapan.php'
			</script>";
	}
}
require '../templates/header.php';
require '../templates/sidebar.php';
require '../templates/topbar.php';
?>

<?php
require '../templates/footer.php'; 
?>
