<?php

include "koneksi.php";
include "cek_login.php";

$id_siswa = $_GET['id_siswa'];
$sql = "select * from siswa where id_siswa='$id_siswa'";
$query = mysqli_query($koneksi, $sql);

while($siswa = mysqli_fetch_assoc($query)) { ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | Sistem Informasi Data Siswa</title>
<body>
    <h1>Edit Data Siswa</h1>
    <form action="proses_edit.php" method="get">
        <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa'] ?>">
        <label for="nis">NIS</label>
        <input type="text" name="nis" id="" value="<?= $siswa['nis'] ?>" required> <br> <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="" value="<?= $siswa['nama'] ?>" required> <br> <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="" value="<?= $siswa['alamat'] ?>" required> <br> <br>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="" value="<?= $siswa['jurusan'] ?>" required> <br> <br>
        <label for="foto">Foto</label>
        <input type="text" name="foto" id="" value="<?= $siswa['foto'] ?>"> <br> <br>
        <input type="submit" value="Simpan">
        <input type="button" value="Batal" onclick="window.location.href='index.php'">
    </form>
</body>
</html>

<?php } ?>