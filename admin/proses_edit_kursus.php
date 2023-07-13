<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_kursus=$_POST['id_kursus'];
$judul=$_POST['judul'];
$deskripsi=$_POST['deskripsi'];
$durasi=$_POST['durasi'];


$query= "UPDATE kursus SET id_kursus='$id_kursus',judul='$judul', deskripsi='$deskripsi',durasi='$durasi'
WHERE id_kursus='$id_kursus'";


$hasil = mysqli_query($koneksi,$query);
if($hasil){
    echo "<script> alert ('proses Edit kursus Berhasil'); window.location='kelola_kursus.php';</script>";
}
else {
    echo "<script alert('proses Edit kursus Gagal'); history.back();</script>";
}
    ?>
