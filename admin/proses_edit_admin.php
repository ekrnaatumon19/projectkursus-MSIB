<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_admin=$_POST['id_admin'];
$nama_admin=$_POST['nama_admin'];
$username=$_POST['username'];
$password=$_POST['password'];

$query="UPDATE admin SET nama_admin='$nama_admin', username='$username', password='$password'
WHERE id_admin='$id_admin'";

$hasil = mysqli_query($koneksi,$query);
if($hasil){
    echo "<script> alert ('proses Edit Admin Berhasil'); window.location='kelola_admin.php';</script>";
}
else {
    echo "<script alert('proses Edit Admin Gagal'); history.back();</script>";
}
    ?>

    
   