<?php

include "koneksi.php";

$id_siswa = $_POST['id_siswa'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$foto = $_POST['foto'];

if($_FILES['foto']['name']){
    $foto = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$foto);
}

$sql = "update siswa set nis='$nis', nama='$nama', alamat='$alamat', jurusan='$jurusan', foto='$foto' where id_siswa='$id_siswa'";
$query = mysqli_query($koneksi, $sql);

if($query) {
   header("location:index.php?edit=sukses"); 
} else {
    header("location:index.php?edit=gagal");
    }

?>