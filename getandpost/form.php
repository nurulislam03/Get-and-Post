<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>
    <h1>Form Input Data Mahasiswa</h1>
    <form action="proses.php" method="POST" name="form">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tgl">
                        <?php
                            for ($i=1;$i<=31;$i++) {
                                echo "<option value=".$i.">".$i."</option>";
                            }
                        ?>
                    </select>
                    <select name="bln">
                        <?php
                            $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                            for ($i=1;$i<=count($bulan);$i++){
                                echo "<option value=".$bulan[$i].">".$bulan[$i]."</option>";
                            }
                        ?>
                    </select>
                    <select name="thn">
                        <?php
                            for ($i=1980;$i<=2022;$i++){
                                echo "<option value=".$i.">".$i."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="ttl"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan">
                        <?php
                            $jurusan=array("","Teknik Informatika","Teknik Sipil","Teknik Elektro","Teknik Mesin","Sistem Informasi","DKV","Ilmu Hukum","PGSD","Manajemen","Akuntansi");
                            for($i=1;$i<=10;$i++){ ?>
                                <option value="<?php echo $jurusan[$i]?>"><?php echo $jurusan[$i]?></option>
                            <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tahun Masuk</td>
                <td>:</td>
                <td>
                    <select name="thn_msk">
                        <?php
                            for ($i=2000;$i<=2022;$i++){
                                echo "<option value=".$i.">".$i."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>