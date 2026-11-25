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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css">
<body>
    <div class="container">
    <h1 class="text-center">Edit Data Siswa</h1>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa'] ?>">
        <label for="nis">NIS</label>
        <input type="text" name="nis" id="" value="<?= $siswa['nis'] ?>" required class="form-control"> <br>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="" value="<?= $siswa['nama'] ?>" required class="form-control"> <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="" value="<?= $siswa['alamat'] ?>" required class="form-control"> <br>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="" value="<?= $siswa['jurusan'] ?>" required class="form-control"> <br>
        <label for="foto">Foto</label> <br>
        <img src="foto/<?= $siswa['foto'] ?>" width="100" class="img-thumbnail">
        <input type="file" name="foto" id="" class="form-control"> <br>
        <input type="submit" value="Simpan" class="btn btn-success">
        <input type="button" value="Batal" onclick="window.location.href='index.php'" class="btn btn-danger">
    </form>
    </div>
</body>
</html>

<?php } ?>