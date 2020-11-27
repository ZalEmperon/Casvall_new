<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-utensils"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Casvall</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= HOME_URL ?>dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Casvall
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= HOME_URL ?>">
          <i class="fas fa-fw fa-globe"></i>
          <span>Casvall Website</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-utensils"></i>
          <span>Daftar Menu</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar Menu Makanan</h6>
            <a class="collapse-item" href="<?= HOME_URL ?>daftar-menu/sarapan.php">Sarapan</a>
            <a class="collapse-item" href="<?= HOME_URL ?>daftar-menu/makan_malam.php">Makan Malam</a>
            <a class="collapse-item" href="<?= HOME_URL ?>daftar-menu/dessert.php">Dessert</a>
            <a class="collapse-item" href="<?= HOME_URL ?>daftar-menu/snack.php">Snack</a>
            <a class="collapse-item" href="<?= HOME_URL ?>daftar-menu/minuman.php">Minuman</a>
          </div>
        </div>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->