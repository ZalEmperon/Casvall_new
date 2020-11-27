<?php 
require_once '../server.php';
require_once '../functions.php';
// Query data menu
$daftar_minuman = query("SELECT id, makanan FROM minuman");
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
          <h1 class="h3 mb-4 text-gray-800">Menu Minuman</h1>
          <div class="row d-flex justify-content-around">
          	<div class="col-md-5">
          		<table class="table table-striped table-bordered">
          			<thead>
          				<tr class="thead-dark">
          					<th scope="col">No</th>
          					<th scope="col">Nama Minuman</th>
          					<th scope="col">Aksi</th>
          				</tr>
          			</thead>
          			<tbody>
          				<?php $i = 1; foreach($daftar_minuman as $minuman): ?>
          					<tr>
          						<th scope="row"><?= $i++; ?></th>
          						<td><?= $minuman['makanan']; ?></td>
          						<td><a href="minumanDetail.php?id=<?= $minuman['id']; ?>" class="badge badge-info">Detail</a></td>
          					</tr>
          				<?php endforeach; ?>
          			</tbody>
          		</table>
          	</div>
            <div class="col-md-5">
              <h3>Tambah Data Minuman</h3>
              <form method="post" action="">
                <div class="card">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="makanan">Nama Minuman</label>
                      <input type="text" class="form-control" id="makanan" name="makanan" placeholder="Nama minuman..." required>
                    </div>
                    <div class="form-group">
                      <label for="makanan">Deskripsi</label>
                      <textarea class="form-control" id="makanan" name="deskripsi" placeholder="Deskripsi minuman..." rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga Minuman</label>
                      <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan harga..." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
              </form>
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