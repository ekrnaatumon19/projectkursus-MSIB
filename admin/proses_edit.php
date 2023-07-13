<?php 
include "header.php";
include "sidebar.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kelola Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row"
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class ="card-header">
                      <h3 class="card-header">
                        <h3 class="card-title">Edit Admin</h3>
</div>
<?php

include "../config/koneksi.php";
//deklarasi edit
$id_admin = $_GET['id_admin'];
$sql_edit = mysqli_query($koneksi,"SELECT*FROM admin WHERE id_admin='$id_admin'");
$row_edit= mysqli_fetch_array($sql_edit);
$nama_lengkap=$row_edit['nama_pemilik'];
$no_hp =$row_edit['no_hp'];
$alamat=$row_edit['alamat'];
$Username=$row_edit['Username'];
$Password=$row_edit['Password'];
?>

<form role="form" action="proses_edit_admin.php" method="POST" enttype="multipart/form-data">
<div class="card-body">
<input type="hidden" name="id_admin" value="<?php echo $id_admin;?>">

 <div class="form-group">
  <label> Nama Admin </label>
  <input type="text" value="<?php echo $nama_admin ?>" name="nama_pemilik" 
  class="form-control" required="required">
  </div>
  <!-- /.END content-wrapper -->
<?php 
  include "footer.php";
?>
