<?php

include "koneksi.php";

$id_siswa = $_GET['id_siswa'];
$nis = $_GET['nis'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$jurusan = $_GET['jurusan'];
$foto = $_GET['foto'];

$sql = "update siswa set nis='$nis', nama='$nama', alamat='$alamat', jurusan='$jurusan', foto='$foto' where id_siswa='$id_siswa'";
$query = mysqli_query($koneksi, $sql);

if($query) {
   header("location:index.php?edit=sukses"); 
} else {
    header("location:index.php?edit=gagal");
    }

?>