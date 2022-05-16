<?php
include '../Controller/Barang.php';
$barang = new Barang();
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
    <form action="../Controller/Barang.php" method="post">
        Filter: <input type="text" name='filter'>
        <input type="submit" name='submit' value='CARI'>
    </form>
    <br>
    <table style="width:30%" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
        </tr>
        <?php foreach ($barang->cetakData() as $ls) : ?>
            <tr>
                <td><?= $ls['nama']; ?></td>
                <td><?= $ls['harga']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    Total: <?= $barang->cetakTotal(); ?>
</body>

</html>