<?php
//file ini merupakan file login untuk admin
session_start();
error_reporting(0);

include "../config/koneksi.php";

//mendapatkan input dari pengguna
$username=$_POST['username'];
$password=$_POST['password'];

//mencek di database tabel admin adakah username dan password
$login="SELECT * FROM admin WHERE username='$username'";
$cek=mysqli_query($koneksi,$login);
$ketemu=mysqli_num_rows($cek);

$login2="SELECT * FROM admin WHERE password='$password'";
$cek2=mysqli_query($koneksi,$login2);
$ketemu2=mysqli_num_rows($cek2);

$login3="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$cek3=mysqli_query($koneksi,$login3);
$ketemu3=mysqli_num_rows($cek3);
$r=mysqli_fetch_assoc($cek3);


if ($ketemu3 == 1) {
    //detail sesi loginnya
    $_SESSION['id_admin']=$r['id_admin'];
    $_SESSION['nama_lengkap']=$r['nama_lengkap'];
    $_SESSION['username']=$r['username'];
    $_SESSION['password']=$r['password'];
    
//login berhasil
echo "<script> alert ('Selamat Datang, Admin');
    window.location = '../admin/index.php'</script>";
}

//menampilkan pesan gagal jika belum memasukkan username dan password
else if ($ketemu3 == !1 & $ketemu ==0 & $ketemu2==0){
    echo "<script> alert ('Username n Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'login.php'</script>";
   
}
//menampilkan pesan gagal jika username salah
else if ($ketemu3 == !1 & $ketemu ==0){
    echo "<script> alert ('Username anda tidak valid ! Mohon periksa kembali.');
    window.location = 'login.php'</script>";
}
//menampilkan pesan gagal jika password salah
else if ($ketemu3 == !1 & $ketemu2 ==0){
    echo "<script> alert ('Password anda tidak valid ! Mohon periksa kembali.');
    window.location = 'login.php'</script>";
}

else {
    echo "<script> alert ('LOGIN GAGAL! Mohon Periksa kembali Username n Password Anda.');
    window.location = 'login.php'</script>";

}
?>

