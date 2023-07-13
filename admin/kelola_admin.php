

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

    <!-- FORM TAMBAH DATA -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Tambah Data Admin</h3> </div>
                           
                          <form role="form" action="proses_tambah_admin.php" method="POST" 
                            enctype="multipart/form-data">
                              <div class="card-body">
                               
                              <div class="form-group">
                                  <label>Id Admin</label>
                                  <input type="text" class="form-control" name="id_admin" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan Id Admin"></textarea>
                                </div>    

                                <div class="form-group">
                                  <label>Nama Admin</label>
                                  <input type="text" class="form-control" name="nama_admin" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan Nama Admin"></textarea>
                                </div> 

                                <div class="form-group">
                                  <label> Password </label>
                                  <input type="text" class="form-control" name="password" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan password"></textarea>
                                </div>

                                <div class="form-group">
                                  <label> Username </label>
                                  <input type="text" class="form-control" name="username" 
                                  required= "required" autocomplete="off" 
                                  placeholder="Masukkan Username"></textarea>
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
                  <h3 class="card-title">Admin</h3>
                </div>
                      <?php
                        include "../config/koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM admin");
                      ?>
                        <div class ="card-body">
                          <table id="example1" class="table table-bordered table-stripped">
                            <thead>
                              <tr>  
                                  <th>No</th>
                                  <th>Id Admin</th>
                                  <th>Nama Admin</th> 
                                  <th>Password</th>
                                  <th>Username</th>
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
                                  <td><?php echo $row['id_admin']; ?></td>
                                  <td><?php echo $row['nama_admin']; ?></td>
                                  <td><?php echo $row['password']; ?></td>
                                  <td><?php echo $row['username']; ?></td>
                                  <td>
                                  <a href="edit_admin.php?id_admin=<?php echo $row['id_admin']; ?>" class="btn btn-warning">EDIT</a>                                
                                  <a href="hapus_admin.php?id_admin=<?php echo $row['id_admin']; ?>" 
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
