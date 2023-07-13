<?php
include "../config/koneksi.php";
//deklarasi
$id_kursus = $_GET ['id_kursus'];

//proses
$sql_hapus = mysqli_query($koneksi, "DELETE FROM kursus WHERE id_kursus = '$id_kursus'");
 
//logika
if($sql_hapus){
    echo "<script> alert ('Proses Hapus Data kursus Berhasil'); window.location='kelola_kursus.php';</script>"; 
}
else{
    echo "<script> alert('Proses Hapus Data kursus Gagal'); window.location='kelola_kursus.php';</script>";
}
?>