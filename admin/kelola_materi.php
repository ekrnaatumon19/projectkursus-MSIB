

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

    <!-- FORM TAMBAH DATA -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Tambah Data Materi</h3> </div>
                           
                          <form role="form" action="proses_tambah_materi.php" method="POST" 
                            enctype="multipart/form-data">
                              <div class="card-body">
                               
                              <div class="form-group">
                                  <label>Id Materi</label>
                                  <input type="text" class="form-control" name="id_materi" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan Id Materi"></textarea>
                                </div>    

                                <div class="form-group">
                                  <label>Judul Materi</label>
                                  <input type="text" class="form-control" name="judul" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan Judul Materi"></textarea>
                                </div> 

                                <div class="form-group">
                                  <label> Deskripsi </label>
                                  <input type="text" class="form-control" name="deskripsi" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan deskripsi"></textarea>
                                </div>

                                <div class="form-group">
                                  <label> Link Materi </label>
                                  <input type="text" class="form-control" name="link_embed" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan Link"></textarea>
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
                  <h3 class="card-title">MATERI</h3>
                </div>
                      <?php
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM materi ");
                      ?>
                        <div class ="card-body">
                          <table id="example1" class="table table-bordered table-stripped">
                            <thead>
                              <tr>  
                                  <th>No</th>
                                  <th>Id Materi</th>
                                  <th>judul</th> 
                                  <th>Deskripsi</th>
                                  <th>Link </th>
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
                                  <td><?php echo $row['id_materi']; ?></td>
                                  <td><?php echo $row['judul']; ?></td>
                                  <td><?php echo $row['deskripsi']; ?></td>
                                  <td><?php echo $row['link_embed']; ?></td>
                                  <td>
                                  <a href="edit_materi.php?id_materi=<?php echo $row['id_materi']; ?>" class="btn btn-warning">EDIT</a>                                
                                  <a href="hapus_materi.php?id_materi=<?php echo $row['id_materi']; ?>" 
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
  <!-- /.END content-wrapper -->
<?php 
  include "footer.php";
?>
