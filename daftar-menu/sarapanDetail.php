<?php 
require_once '../server.php';
require_once '../functions.php';
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	// query data lalu ambil data pertama (spesifik)
	$sarapan = query("SELECT * FROM sarapan WHERE id='$id'") ? query("SELECT * FROM sarapan WHERE id='$id'")[0] : null;
}
if(empty($sarapan) || !isset($sarapan)){
	header("Location: ".HOME_URL."dashboard.php");
	exit();
} 

// header template
require '../templates/header.php';
// sidebar template
require '../templates/sidebar.php';
// topbar template
require '../templates/topbar.php'; 
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Detail Sarapan</h1>
          <div class="row">
          	<div class="col-md-9">
          		<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="https://images.unsplash.com/photo-1599354607446-c0aa31fb6c2e?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NzV8fGZyaWVkJTIwcmljZXxlbnwwfHwwfA%3D%3D&auto=format&fit=crop&w=500&q=60" class="card-img h-100">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title"><?= $sarapan['makanan']; ?></h5>
				        <p class="card-text"><?= $sarapan['deskripsi']; ?></p>
				        <div class="d-flex justify-content-between mt-5">
				        	<div>
				        		<a href="sarapan.php" class="btn btn-info"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
				        	</div>
				        	<div>
						        <a href="sarapanEdit.php?id=<?= $id; ?>" class="btn btn-primary mr-2" title="Edit"><i class="fas fa-edit"></i> Edit</a>
						        <a href="sarapanHapus.php?id=<?= $id; ?>" class="btn btn-danger" title="Hapus"><i class="fas fa-trash-alt"></i> Hapus</a>
				    		</div>
				    	</div>
				      </div>
				    </div>
				  </div>
				</div>
          	</div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
// footer template
 require '../templates/footer.php'; 
 ?>