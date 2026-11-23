<?php

$server = "localhost";
$username = "root";
$password = "rpl11";
$database = "db_si_datasiswa";

$koneksi = mysqli_connect($server, $username, $password, $database);

// if($koneksi) {
//     echo "koneksi berhasil";
// } else {
//     echo "koneksi gagal";
// }