<?php
include '../Controller/KST.php';
$kst = new KST();
$detail = $kst->cetakDetail($_POST['kode']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail KST</title>
</head>

<body>
    <h1>Kartu Studi Tetap</h1>
    <h1><b><i><?= $_POST['nim']; ?> || <?= $_POST['nama']; ?></i></b></h1>
    <p>- Matakuliah: <?= $detail['matkul']; ?></p>
    <p>- Hari: <?= $detail['hari']; ?></p>
    <p>- Jam: <?= $detail['jam']; ?></p>
    <p>- Dosen: <?= $detail['dosen']; ?></p>
    <form action="../Controller/login.php" method="post">
        <input type="hidden" name="nim" value="<?= $_POST['nim']; ?>">
        <input type="hidden" name="nama" value="<?= $_POST['nama']; ?>">
        <input type="hidden" name="pass" value="<?= $_POST['pass']; ?>">
        <input type="submit" name="kembali" value="Kembali">
    </form>
</body>

</html>