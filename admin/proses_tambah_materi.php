<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel

$id_materi= $_POST ['id_materi'];
$judul       =$_POST ['judul'];
$deskripsi     =$_POST['deskripsi'];
$link_embed= $_POST ['link_embed'];

$query = "INSERT INTO materi (id_materi,judul,deskripsi,link_embed)
                VALUES('$id_kursus','$judul','$deskripsi','$link_embed')";

$hasil = mysqli_query($koneksi,$query);
if($hasil){
    echo "<script> alert ('proses Tambah materi Berhasil'); window.location='../admin/kelola_materi.php';</script>";
}
else {
    echo "<script alert('proses Tambah materi Gagal'); history.back();</script>";
}