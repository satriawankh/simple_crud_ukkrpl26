<?php

include "koneksi.php";

$id_siswa = $_GET['id_siswa'];

$hapus_foto = mysqli_fetch_assoc(mysqli_query($koneksi, "select foto from siswa where id_siswa='$id_siswa'"));
unlink("foto/".$hapus_foto['foto']);

$sql = "delete from siswa where id_siswa = '$id_siswa'";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header("location:index.php?hapus=sukses");
} else {
    header("location:index.php?hapus=gagal");
}
?>