<?php

$server = "localhost";
$username = "root";
$password = "rpl11"; //secara default, password kosong --> ganti dengan ""
$database = "db_si_datasiswa"; //sesuaikan nama database yang dibuat

$koneksi = mysqli_connect($server, $username, $password, $database);

// if($koneksi) {
//     echo "koneksi berhasil";
// } else {
//     echo "koneksi gagal";
// }
?>