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
            <h1 class="m-0 text-dark">Kelola Materi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">MATERI</li>
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
                        <h3 class="card-title">Edit Materi</h3>
</div>
<?php

include "../config/koneksi.php";
//deklarasi edit
$id_materi = $_GET['id_materi'];
$sql_edit = mysqli_query($koneksi,"SELECT*FROM materi WHERE id_materi='$id_materi'");
$row_edit= mysqli_fetch_array($sql_edit);
$id_materi=$row_edit['id_materi'];
$judul=$row_edit['judul'];
$deskripsi=$row_edit['deskripsi'];
$link_embed=$row_edit['link_embed'];
?>

<form role="form" action="proses_edit_materi.php" method="POST" enctype="multipart/form-data">
<div class="card-body">
<input type="hidden" name="id_materi" value="<?php echo $id_admin;?>">

 <div class="form-group">
  <label> Id Materi </label>
  <input type="text" value="<?php echo $id_materi ?>" name="id_materi" 
  class="form-control" required="required">
  </div>
 
<div class="form-group">
<label> Judul Materi</label>
<input type="text" value="<?php echo $judul ?>" name="judul"
class="form-control" required="required">
</div>

<div class="form-group">
<label>Deskripsi</label>
<input type="text" value="<?php echo $deskripsi ?>" name="deskripsi"
class="form-control" required="required">
</div>

<div class="form-group">
<label>Link Embed</label>
<input type="text" value="<?php echo $link_embed ?>" name="link_embed"
class="form-control" required="required">
</div>


<div class="card-footer">
<button type="submit"class="btn btn-primary"> Simpan </button>
<a href="kelola_materi.php" class="btn btn-danger"> Batal </a>
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
