<?php
include "koneksi.php";
include "cek_login.php";
$sql = "select * from siswa";
$query= mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Sistem Informasi Data Siswa</title>
    <!-- untuk link CDN CSS-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h3 class="text-center">Selamat datang, <?= $_SESSION['username']?>!</h3>

    <a href="tambah.php"><button class="btn btn-primary">Tambah Data</button></a>
    <a href="logout.php"><button class="btn btn-primary">Logout</button></a> <br><br>

    <table class="table table-bordered text-center">
        <tr class="table-secondary">
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php
        while($siswa = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?= $siswa['id_siswa'] ?></td>
            <td><?= $siswa['nis'] ?></td>
            <td><?= $siswa['nama'] ?></td>
            <td><?= $siswa['alamat'] ?></td>
            <td><?= $siswa['jurusan'] ?></td>
            <td><img src="foto/<?= $siswa['foto'] ?>" width=100 class="img-thumbnail"></td>
            <td>
                <a href="edit.php?id_siswa=<?= $siswa['id_siswa']?>" class="btn btn-warning">Edit</a> | 
                <a href="hapus.php?id_siswa=<?= $siswa['id_siswa']?>"
                onclick="return confirm('Yakin ingin menghapus data siswa ini?')" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php } ?>

    </table>
    </div>
</body>
</html>