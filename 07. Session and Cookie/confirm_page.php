<?php
session_start();
if (isset($_POST['batal'])) {
    unset($_SESSION['matkul']);
    header('Location: rmk.php');
}
if (isset($_POST['simpan'])) {
    header('Location: result.php');
}
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
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
    <form action="" method="post">
        <p>Nama: <?= $_SESSION['user']; ?></p>
        <input type="submit" name="logout" value="LOGOUT">
    </form>
    <br>
    <p>Daftar Matakuliah: </p>
    <table style="width:30%" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Kode</th>
            <th>Matakuliah</th>
        </tr>
        <?php foreach ($_SESSION['matkul'][0] as $mk) : ?>
            <tr>
                <td><?= $mk; ?></td>
                <td>
                    <?php foreach ($_SESSION['mk_db'][0] as $ls) :
                        if ($ls['kode'] == $mk) {
                            echo $ls['mk'];
                            break;
                        }
                    endforeach;
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <form action="" method="post">
        <input type="submit" name="batal" value="BATALKAN PILIHAN">
        <input type="submit" name="simpan" value="SIMPAN">
    </form>
</body>

</html>