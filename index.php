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
</head>
<body>
    <h3>Selamat datang, <?= $_SESSION['username']?></h3>

    <a href="tambah.php"><button>Tambah Data</button></a> <br><br>
    <a href="logout.php"><button>Logout</button></a> <br><br>

    <table border="1">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamatk</th>
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
            <td><?= $siswa['foto'] ?></td>
            <td>
                <a href="edit.php?id_siswa=<?= $siswa['id_siswa']?>">Edit</a> | 
                <a href="hapus.php?id_siswa=<?= $siswa['id_siswa']?>"
                onclick="return confirm('Yakin ingin menghapus data siswa ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</body>
</html>