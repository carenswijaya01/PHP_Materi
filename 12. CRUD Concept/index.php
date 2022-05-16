<?php 
    //manggil php koneksi
    require "DAO.php";

    //query untuk read data
    $mahasiswa = qselect("SELECT * FROM mahasiswa");
    $dosen = qselect("SELECT * FROM dosen");

    if(isset($_POST["cariMhs"])){
        $mahasiswa = qsearch($_POST["keywordMhs"], "mahasiswa");
    } else if(isset($_POST["cariDsn"])){
        $dosen = qsearch($_POST["keywordDsn"], "dosen");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CRUD [CREATE, READ, UPDATE, DELETE]</h1>
    <a href="insert.php?status=mahasiswa">Tambah Mahasiswa</a> | 
    <a href="insert.php?status=dosen">Tambah Dosen</a>

    <br><br>

    <!-- DATA MAHASISWA-->
    <h3>Data Mahasiswa</h3>

    <form action="" method="post">
        <input type="text" name="keywordMhs" size="40" autofocus placeholder="Masukkan keyword yang ingin dicari" autocomplete="off">
        <button type="submit" name="cariMhs">CARI</button>
    </form>
    
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>

        <!-- nampilin data tiap row looping-->
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $mhs["nim"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
                <td><?= $mhs["alamat"]; ?></td>
                <td><?= $mhs["telepon"]; ?></td>
                <td>
                    <a href="edit.php?nim=<?= $mhs["nim"]; ?>&status=mahasiswa">Edit</a> | 
                    <a href="delete.php?nim=<?= $mhs["nim"]; ?>&status=mahasiswa" onclick="return confirm('Yakin Mau Hapus?')">Delete</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

    <br><br>

    <!-- DATA DOSEN-->
    <h3>Data Dosen</h3>

    <form action="" method="post">
        <input type="text" name="keywordDsn" size="40" autofocus placeholder="Masukkan keyword yang ingin dicari" autocomplete="off">
        <button type="submit" name="cariDsn">CARI</button>
    </form>
    
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Lulusan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>

        <!-- nampilin data tiap row looping-->
        <?php $i = 1; ?>
        <?php foreach($dosen as $dsn) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $dsn["nim"]; ?></td>
                <td><?= $dsn["nama"]; ?></td>
                <td><?= $dsn["jurusan"]; ?></td>
                <td><?= $dsn["lulusan"]; ?></td>
                <td><?= $dsn["alamat"]; ?></td>
                <td><?= $dsn["telepon"]; ?></td>
                <td>
                    <a href="edit.php?nim=<?= $dsn["nim"]; ?>&status=dosen">Edit</a> | 
                    <a href="delete.php?nim=<?= $dsn["nim"]; ?>&status=dosen" onclick="return confirm('Yakin Mau Hapus?')">Delete</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>