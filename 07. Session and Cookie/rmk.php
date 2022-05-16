<?php
session_start();

$mk_db = [
    ["kode" => "A001", "mk" => "Pemrograman Web"],
    ["kode" => "A002", "mk" => "Pemrograman Service"],
    ["kode" => "A003", "mk" => "Desain Interface"],
    ["kode" => "A004", "mk" => "Manajemen Database"]
];

$_SESSION['mk_db'] = array();
array_push($_SESSION['mk_db'], $mk_db);

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
}

if (isset($_POST['daftar']) && isset($_POST['mk']) && is_array($_POST['mk'])) {
    //var_dump($_POST['mk']);
    $_SESSION['matkul'] = array();
    array_push($_SESSION['matkul'], $_POST['mk']);
    header('Location: confirm_page.php');
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
        <p>Selamat Datang: <?= $_SESSION['user']; ?></p><input type="submit" name="logout" value="LOGOUT">
    </form>
    <br>
    <p>Silahkan pilih matakuliah: </p>
    <form action="" method="post">
        <table style="width:30%" border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>Pilih</th>
            </tr>
            <?php foreach ($mk_db as $ls) : ?>
                <tr>
                    <td><?= $ls['kode']; ?></td>
                    <td><?= $ls['mk']; ?></td>
                    <td>
                        <input type="checkbox" name="mk[]" value="<?= $ls['kode']; ?>"><br>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br><input type="submit" name="daftar" value="DAFTAR">
    </form>
</body>

</html>