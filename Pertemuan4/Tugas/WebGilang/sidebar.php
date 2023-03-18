<?php
$menus = [
    'Home' => 'index.php',
    'Produk' => 'produk.php',
    'Profile' => 'profile.php',
    'About' => 'about.php',
];
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Selamat Datang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/nf.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sistem Informasi Data Mahasiswa</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Mahasiswa Nurul Fikri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="sisteminformasi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prodi Sistem Informasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="teknikinformatika.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prodi Teknik Informatika</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="bisnisdigital.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prodi Bisnis Digital</p>
                </a>
              </li>
            </ul>
          </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>