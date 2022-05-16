<?php
session_start();
if (isset($_POST['done'])) {
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
    <p>Nama: <?= $_SESSION['user']; ?></p>
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
        <input type="submit" name="done" value="DONE">
    </form>
</body>

</html>