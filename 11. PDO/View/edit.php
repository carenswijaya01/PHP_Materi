<?php
include '../Controller/Siswa.php';
$detail = $siswa->getDetail($_GET['nis']);
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
    <h1>Masukkan NIS dan NAMA Siswa</h1>
    <form action="../Controller/Siswa.php" method="post">
        NIS: <input type="text" name="nis" value="<?= $detail[0]['nis']; ?>"><br><br>
        Nama: <input type="text" name="nama" value="<?= $detail[0]['nama_siswa']; ?>"><br><br>
        <input type="hidden" name="id" value="<?= $detail[0]['no']; ?>">
        <input type="submit" name="simpan" value="EDIT DATA">
    </form>
</body>

</html>