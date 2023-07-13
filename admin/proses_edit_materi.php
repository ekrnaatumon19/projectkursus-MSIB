<?php
//pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$id_materi=$_POST['id_materi'];
$judul=$_POST['judul'];
$deskripsi=$_POST['deskripsi'];
$link_embed=$_POST['link_embed'];


$query= "UPDATE materi SET id_materi='$id_materi',judul='$judul', deskripsi='$deskripsi',link_embed='$link_embed'
WHERE id_materi='$id_materi'";


$hasil = mysqli_query($koneksi,$query);
if($hasil){
    echo "<script> alert ('proses Edit materi Berhasil'); window.location='kelola_materi.php';</script>";
}
else {
    echo "<script alert('proses Edit materi Gagal'); history.back();</script>";
}
    ?>
