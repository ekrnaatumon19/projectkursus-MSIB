
    
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
            <h1 class="m-0 text-dark">Kelola Kursus</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Kursus</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                  <div class="card card-primary">
                    <div class ="card-header">
                        <h3 class="card-title">Edit Kursus</h3>
</div>
<?php

include "../config/koneksi.php";
//deklarasi edit
$id_kursus= $_GET['id_kursus'];
$sql_edit = mysqli_query($koneksi,"SELECT*FROM kursus WHERE id_kursus='$id_kursus'");
$row_edit= mysqli_fetch_array($sql_edit);
$id_admin=$row_edit['id_admin'];
$judul=$row_edit['judul'];
$deskripsi=$row_edit['deskripsi'];
$durasi=$row_edit['durasi'];



?>

<form role="form" action="proses_edit_kursus.php" method="POST" enctype="multipart/form-data">
<div class="card-body">
<input type="hidden" name="id_kursus" value="<?php echo $id_kursus;?>">

 <div class="form-group">
  <label> Id Kursus </label>
  <input type="text" value="<?php echo $id_kursus ?>" name="id_kursus" 
  class="form-control" required="required">
  </div>

  <div class="form-group">
<label>Id_Admin</label>
<input type="text" value="<?php echo $id_admin ?>" name="id_admin"
class="form-control" required="required">
</div>

<div class="form-group">
<label>Judul</label>
<input type="text" value="<?php echo $judul ?>" name="judul"
class="form-control" required="required">
</div>
 
<div class="form-group">
<label> deskripsi</label>
<input type="text" value="<?php echo $deskripsi ?>" name="deskripsi"
class="form-control" required="required">
</div>

<div class="form-group">
<label>Durasi</label>
<input type="text" value="<?php echo $durasi ?>" name="durasi"
class="form-control" required="required">
</div>




<div class="card-footer">
<button type="submit"class="btn btn-primary"> Simpan </button>
<a href="kelola_kursus.php" class="btn btn-danger"> Batal </a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</div>
<?php include "footer.php";?>
