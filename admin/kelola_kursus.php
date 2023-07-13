



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
            <h1 class="m-0 text-dark">Kelola Kursus</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Kelola Kursus</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- FORM TAMBAH DATA -->
<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Tambah Data Kursus</h3> </div>
                           
                          <form role="form" action="proses_tambah_kursus.php" method="POST" 
                            enctype="multipart/form-data">
                              <div class="card-body">
                               
                              <div class="form-group">
                                  <label>Id Kursus</label>
                                  <input type="text" class="form-control" name="id_kursus" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan Id Kursus"></textarea>
                                </div> 

                                <div class="form-group">
                                  <label>Judul Kursus</label>
                                  <input type="text" class="form-control" name="judul" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan Judul Kursus"></textarea>
                                </div> 

                                
                                <div class="form-group">
                                  <label>deskripsi</label>
                                  <input type="text" class="form-control" name="deskripsi" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan Deskripsi"></textarea>
                                </div> 

                                <div class="form-group">
                                  <label>Durasi Kursus</label>
                                  <input type="text" class="form-control" name="durasi" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Durasi kursus "></textarea>
                                </div> 

                                <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                              </div>
                            </form>
                      </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- /.FORM TAMBAH DATA -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-olive">
                <div class="card-header">
                  <h3 class="card-title">Kursus</h3>
                </div>
                      <?php
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM kursus");
                      ?>
                        <div class ="card-body">
                          <table id="example1" class="table table-bordered table-stripped">
                            <thead>
                              <tr>  
                                  <th>No </th>
                                  <th>Id Kusus</th> 
                                  <th>Judul Kursus</th> 
                                  <th>Deskripsi</th> 
                                  <th>Durasi</th> 
                                  <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                              $no = 1;
                              while($row = mysqli_fetch_array($sql)){
                            ?>
                              <tr>
                                  <td><?php echo $no++?></td>
                                  <td><?php echo $row['id_kursus']; ?></td>
                                  <td><?php echo $row['judul']; ?></td>
                                  <td><?php echo $row['deskripsi']; ?></td>
                                  <td><?php echo $row['durasi']; ?></td>
                                  
                               
                                  <td>
                                  <a href="edit_kursus.php?id_kursus=<?php echo $row['id_kursus']; ?>" class="btn btn-warning">EDIT</a>                                
                                  <a href="hapus_kursus.php?id_kursus=<?php echo $row['id_kursus']; ?>" 
                                  onclick="return confirm('Yakin Hapus?')"
                                    class="btn btn-danger">HAPUS</a>
                                  </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
  
  </div>

<?php 
  include "footer.php";
?>
