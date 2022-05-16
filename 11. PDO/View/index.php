<?php
include '../Controller/Siswa.php';
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
        NIS: <input type="text" name="nis"><br><br>
        Nama: <input type="text" name="nama"><br><br>
        <input type="submit" name="insert" value="TAMBAHKAN DATA">
    </form>
    <br>
    <table style="width:35%" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 0;
        foreach ($siswa->getAll() as $ls) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $ls['nis']; ?></td>
                <td><?= $ls['nama_siswa']; ?></td>
                <td>
                    <form action="../Controller/Siswa.php" method="post">
                        <input type="hidden" name="nis" value="<?= $ls['nis']; ?>">
                        <input type="submit" name="edit" value="Edit">
                        <input type="submit" name="hapus" value="Hapus">
                    </form>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
</body>

</html>