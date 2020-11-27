<?php 
require_once '../server.php';
require_once '../functions.php';
// Query data menu
$daftar_sarapan = query("SELECT id, makanan FROM sarapan");
if (isset($_POST["add"])) {
  $makanan = mysqli_real_escape_string ($db, $_POST['makanan']);
  $deskripsi = mysqli_real_escape_string ($db, $_POST['deskripsi']);
  $harga = mysqli_real_escape_string ($db, $_POST['harga']);
  $sqll = "INSERT INTO sarapan(makanan, deskripsi, harga) VALUES ('$makanan', '$deskripsi', '$harga')";
  mysqli_query($db, $sqll);
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
          <h1 class="h3 mb-4 text-gray-800">Menu Sarapan</h1>
          <div class="row d-flex justify-content-around">
          	<div class="col-md-5">
          		<table class="table table-striped table-bordered">
          			<thead>
          				<tr class="thead-dark">
          					<th scope="col">No</th>
          					<th scope="col">Nama Makanan</th>
          					<th scope="col">Aksi</th>
          				</tr>
          			</thead>
          			<tbody>
          				<?php $i = 1; foreach($daftar_sarapan as $sarapan): ?>
          					<tr>
          						<th scope="row"><?= $i++; ?></th>
          						<td><?= $sarapan['makanan']; ?></td>
          						<td><a href="sarapanDetail.php?id=<?= $sarapan['id']; ?>" class="badge badge-info">Detail</a></td>
          					</tr>
          				<?php endforeach; ?>
          			</tbody>
          		</table>
          	</div>
            <div class="col-md-5">
              <h3>Tambah Data Sarapan</h3>
              <form method="post" action="">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="makanan">Nama Makanan</label>
                      <input type="text" class="form-control" id="makanan" name="makanan" placeholder="Nama makanan..." required>
                    </div>
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi makanan..." rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga Makanan</label>
                      <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga..." required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="add">Tambah Data</button>
                  </div>
                </div>
              </form>
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
