<?php

include "koneksi.php";

$nis = $_GET['nis'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$jurusan = $_GET['jurusan'];
$foto = $_GET['foto'];


$sql = "insert into siswa (nis, nama, alamat, jurusan, foto) values ('$nis', '$nama', '$alamat', '$jurusan', '$foto')";
$query = mysqli_query($koneksi, $sql);

if($query) {
   header("location:index.php?simpan=sukses"); 
} else {
    header("location:index.php?simpan=gagal");
    }

?>