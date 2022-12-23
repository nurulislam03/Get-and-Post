<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl = $_POST['tgl'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$ttl = $_POST['ttl'];
$jurusan = $_POST['jurusan'];
$thn_msk = $_POST['thn_msk'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Jurusan</th>
            <th>Tahun Masuk</th>
        </tr>
        <tr>
            <td><?= $nim ?></td>
            <td><?= $nama ?></td>
            <td><?= $jenis_kelamin ?></td>
            <td><?= $tgl ?>
            <?= $bln ?>
            <?= $thn ?>
            </td>
            <td><?= $ttl ?></td>
            <td><?= $jurusan ?></td>
            <td><?= $thn_msk ?></td>
        </tr>
    </table>
    
</body>
</html>