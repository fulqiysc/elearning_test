<?php

$user_aktif = $this->db->get_where('euser', ['email' => $this->session->userdata('email')])->row_array();
$menu_materi = $this->menu_model->menu_materi();

?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1b9a52;">
  <!-- Brand Logo -->
  <a href="<?= base_url('admin/route'); ?>" class="brand-link">
    <img src="<?= base_url('assets/mi/mimarif.png'); ?>" alt="E Learning" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light text-light">E-Learning</span>
  </a>


  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets/image/profile/') . $user_aktif['image']; ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= base_url('admin/route'); ?>" class="d-block  text-light"><?= $user_aktif['nama']; ?></a>
      </div>
    </div>




    <!-- Sidebar Menu -->
    <nav class="mt-2 ">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p class="text-light">
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/route'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="text-light">Dashboard</p>
              </a>
            </li>

          </ul>
        </li>

        <!-- Start Edit Profile -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-cog"></i>
            <p class="text-light">
              Edit Profile
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/profile'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="text-light">Edit Profile</p>
              </a>
            </li>

          </ul>
        </li>
        <!-- Edit Profile -->


        <!-- Start Change Password -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-key"></i>
            <p class="text-light">
              Change Password
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/profile/changepassword'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="text-light">Change Password</p>
              </a>
            </li>

          </ul>
        </li>
        <!-- End Change Password -->


        <!-- Start Courses -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list-ul"></i>
            <p class="text-light">
              Courses
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">

            <?php foreach ($menu_materi as $menu_materi) { ?>
              <li class="nav-item">
                <a href="<?= base_url('admin/materi/kelas/') . $menu_materi['slug_kelas']; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?= $menu_materi['nama_kelas']; ?></p>

                </a>

              </li>
            <?php } ?>

            <!-- Show All -->
            <li class="nav-item">
              <a href="<?= base_url('admin/materi/courses'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="font-weight-bold">Show All Courses...</p>


              </a>

            </li>
            <!-- End Show All -->


          </ul>



        </li>

        <!-- End Courses -->

        <?php if ($this->session->userdata('role_id') != 2) { ?>
          <!-- Start Classs -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p class="text-light">
                Class
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/materi'); ?>" class="nav-link">
                  <i class="fa fa-table nav-icon"></i>
                  <p class="text-light">Show All Class</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/materi/tambah'); ?>" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p class="text-light">Add Materi</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- End Class -->
        <?php } ?>






        <!-- Kelas -->
        <?php if ($this->session->userdata('role_id') == 1) { ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-anchor"></i>
              <p class="text-light">
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/kelas'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Show Category</p>
                </a>
              </li>

            </ul>
          </li>
          <!-- End Kelas -->
        <?php } ?>







        <?php if ($this->session->userdata('role_id') == 1) { ?>
          <!-- Menu Administrator Hanya Admin yang bisa akses page ini-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p class="text-light">
                User Administrator
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="<?= base_url('admin/user_list'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="text-light">Data Administrator</p>
                </a>
              </li>




            </ul>
          </li>
          <!-- End Menu Administrator -->
        <?php } ?>




        <!-- Menu Logout Admin -->
        <li class="nav-item">
          <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
            <i class="far fas fa-sign-out-alt  nav-icon"></i>
            <p class="text-light">Logout</p>
          </a>
        </li>
        <!--  End Menu Logout Admin -->




      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <!-- Main content -->
  <section class="content mt-3">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <p class="card-title font-weight-bold"><?= $title; ?></p>
          </div>
          <!-- /.card-header -->
          <div class="card-body">