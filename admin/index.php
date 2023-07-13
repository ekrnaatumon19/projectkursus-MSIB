<?php
include "header.php";
include "sidebar.php";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">About Us</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kursus Project</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <!-- Small boxes (Stat box) -->
<!-- QUERY PINTASAN MULAI -->
        <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM admin");
            $id_admin =mysqli_num_rows($sql);
                  ?>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><div><?php echo $id_admin;?></div></h3>

                <p>ADMIN</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-tie "></i>
              </div>
              <a href="kelola_admin.php" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- QUERY PINTASAN SELESAI -->


 <!-- QUERY PINTASAN MULAI -->
 <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM kursus ");
            $id_kursus =mysqli_num_rows($sql);
          ?>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><div><?php echo $id_kursus;?></div></h3>

                <p>KURSUS</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-tie"></i>
              </div>
              <a href="kelola_kursus.php" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- QUERY PINTASAN SELESAI -->

           <!-- QUERY PINTASAN MULAI -->
        <?php
            include "../config/koneksi.php";
            $sql = mysqli_query($koneksi, "SELECT * FROM materi ");
            $id_materi =mysqli_num_rows($sql);
          ?>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><div><?php echo $id_materi;?></div></h3>

                <p>MATERI</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-tie"></i>
              </div>
              <a href="kelola_materi.php" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- QUERY PINTASAN SELESAI -->

         



          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php
include "footer.php";
?>