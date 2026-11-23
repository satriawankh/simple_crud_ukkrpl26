<?php
include "cek_login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah | Sistem Informasi Data Siswa</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="proses_tambah.php" method="get" enctype="multipart/form-data">
        <label for="nis">NIS</label>
        <input type="text" name="nis" id="" required> <br> <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="" required> <br> <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="" required> <br> <br>
        <label for="alamat">Jurusan</label>
        <input type="text" name="jurusan" id="" required> <br> <br>
        <label for="foto">Foto</label>
        <input type="file" name="foto" id="" accept="image/*"> <br> <br>
        <input type="submit" value="Simpan">
        <input type="button" value="Batal" onclick="window.location.href='index.php'">
    </form>
</body>
</html>