<?php

include "koneksi.php";

$id_siswa = $_GET['id_siswa'];
$sql = "delete from siswa where id_siswa = '$id_siswa'";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header("location:index.php?hapus=sukses");
} else {
    header("location:index.php?hapus=gagal");
}
?>