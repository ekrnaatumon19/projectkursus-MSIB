
<?php

$server="localhost";
$username="root";
$password="";
$database="project";
$koneksi=mysqli_connect($server,$username,$password,$database);

if(mysqli_connect_errno()){
    echo "Koneksi Database Gagal :".mysqli_connect_error(); 
    //menujukan letak error
}
?>