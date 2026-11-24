<?php

include "koneksi.php";
$foto = $_FILES['foto'];

$sql = "insert into siswa (foto) values('$foto')";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header("location:index.php?upload=sukses");
} else {
    header("location:index.php?upload=gagal");
}
?>