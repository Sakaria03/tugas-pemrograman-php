<?php
require 'koneksi.php';
$pengaduan = query("SELECT * FROM pengaduan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengaduan Mahasiswa</title>
</head>
<body>
    <h1>Daftar Data Pengaduan Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Bulan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Saluran</th>
            <th>Isi Pengaduan</th>
            <th>Tindak Lanjut</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pengaduan as $adu) : ?>
        <tr>
            <td><?= $i;?></td>
            <td><?= $adu["bulan"];?></td>
            <td><?= $adu["nama"];?></td>
            <td><?= $adu["alamat"];?></td>
            <td><?= $adu["saluran"];?></td>
            <td><?= $adu["isi_pengaduan"];?></td>
            <td><?= $adu["tindak_lanjut"];?></td>
            <td><img src="Gambar/<?= $adu["gambar"]?>" alt="Bukti" width="50"></td>
            <td>
                <a href="#"> Ubah </a> <br>
                <a href="#"> Hapus </a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
</body>
</html>