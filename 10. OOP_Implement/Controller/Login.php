<?php
include '../Model/UserModel.php';
include '../Controller/KST.php';
$user = new UserModel();
$kst = new KST();
?>

<?php if ($user->cekLogin($_POST['nim'], $_POST['pass']) || isset($_POST['kembali'])) { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <h1>Kartu Studi Tetap</h1>
    <h1><b><i><?= $_POST['nim']; ?> || <?= $user->getNama_nim($_POST['nim']); ?></i></b></h1>
    <br>
    <table style="width:75%" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Kode</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Mata Kuliah</th>
            <th>Dosen</th>
            <th>Detail</th>
        </tr>
        <?php foreach ($kst->cetakData() as $ls) : ?>
            <tr>
                <td><?= $ls['kode']; ?></td>
                <td><?= $ls['hari']; ?></td>
                <td><?= $ls['jam']; ?></td>
                <td><?= $ls['matkul']; ?></td>
                <td><?= $ls['dosen']; ?></td>
                <td>
                    <form action="../Controller/Detail.php" method="post">
                        <input type="hidden" name="nim" value="<?= $_POST['nim']; ?>">
                        <input type="hidden" name="pass" value="<?= $_POST['pass']; ?>">
                        <input type="hidden" name="nama" value="<?= $user->getNama_nim($_POST['nim']); ?>">
                        <input type="hidden" name="kode" value="<?= $ls['kode']; ?>">
                        <input type="submit" value="Detail">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <form action="../View/login.php" method="post">
        <input type="submit" name="logout" value="LOGOUT">
    </form>

    </html>

<?php } else {
    header('Location: ../View/login.php');
} ?>