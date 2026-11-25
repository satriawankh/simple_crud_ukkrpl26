<?php
include "cek_login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah | Sistem Informasi Data Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1 class="text-center">Tambah Data</h1>
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
        <label for="nis">NIS</label>
        <input type="text" name="nis" id="" required class="form-control"> <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="" required class="form-control"> <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="" required class="form-control"> <br>
        <label for="alamat">Jurusan</label>
        <input type="text" name="jurusan" id="" required class="form-control"> <br>
        <label for="foto">Foto</label>
        <input type="file" name="foto" id="" accept="image/*" class="form-control"> <br>
        <input type="submit" value="Simpan" class="btn btn-success">
        <input type="button" value="Batal" onclick="window.location.href='index.php'" class="btn btn-danger">
    </form>
    </div>
</body>
</html>