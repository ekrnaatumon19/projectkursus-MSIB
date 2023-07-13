<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel

$id_kursus= $_POST ['id_kursus'];
$judul       =$_POST ['judul'];
$deskripsi     =$_POST['deskripsi'];
$durasi= $_POST ['durasi'];

$query = "INSERT INTO kursus (id_kursus,judul,deskripsi,durasi)
                VALUES('$id_kursus','$judul','$deskripsi','$durasi')";

$hasil = mysqli_query($koneksi,$query);
if($hasil){
    echo "<script> alert ('proses Tambah kursus Berhasil'); window.location='../admin/kelola_kursus.php';</script>";
}
else {
    echo "<script alert('proses Tambah kursus Gagal'); history.back();</script>";
}