<?php
include "../config/koneksi.php";
//deklarasi
$id_admin = $_GET ['id_admin'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM admin WHERE id_admin = '$id_admin'");
 
//logika
if($sql_hapus){
    echo "<script> alert ('Proses Hapus Data Admin Berhasil'); window.location='kelola_admin.php';</script>"; 
}
else{
    echo "<script> alert('Proses Hapus Data Admin Gagal'); window.location='kelola_admin.php';</script>";
}
?>