<?php

include "koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$foto = $_FILES['foto']['name'];

move_uploaded_file($_FILES['foto']['tmp_name'], "foto/$foto");

$sql = "insert into siswa (nis, nama, alamat, jurusan, foto) values ('$nis', '$nama', '$alamat', '$jurusan', '$foto')";
$query = mysqli_query($koneksi, $sql);

if($query) {
   header("location:index.php?simpan=sukses"); 
} else {
    header("location:index.php?simpan=gagal");
    }

?>