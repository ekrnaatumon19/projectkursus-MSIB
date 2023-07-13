<?php
include "../config/koneksi.php";
//deklarasi
$id_materi = $_GET ['id_materi'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM materi WHERE id_materi = '$id_materi'");
 
//logika
if($sql_hapus){
    echo "<script> alert ('Proses Hapus Data materi Berhasil'); window.location='kelola_materi.php';</script>"; 
}
else{
    echo "<script> alert('Proses Hapus Data materi Gagal'); window.location='kelola_materi.php';</script>";
}
?>