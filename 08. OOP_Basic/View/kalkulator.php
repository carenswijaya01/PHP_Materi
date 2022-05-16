<?php
include_once '../Controller/Kalkulator.php';
$kalkulator = new Kalkulator();
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
    <h1>Kalkulator</h1>
    <form action="../Controller/Kalkulator.php" method="post">
        Nilai 1: <input type="number" name='nilai1'>
        <br><br>
        Nilai 2: <input type="number" name='nilai2'>
        <input type="submit" name='tambah' value='TAMBAH'>
    </form>

    <br><br>
    Hasil: <?= $kalkulator->cetakTambah(); ?>
    <br><br>
    Keterangan: <?= $kalkulator->cetakKeterangan(); ?>
</body>

</html>