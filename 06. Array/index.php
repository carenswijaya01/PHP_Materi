<?php
$mahasiswa = [
    ["nim" => "672019084", "nama" => "Carens Kurniawan Wijaya", "ipk" => 3.9],
    ["nim" => "672019001", "nama" => "Tukenim", "ipk" => 3.1],
    ["nim" => "672019002", "nama" => "Joko", "ipk" => 3.5],
    ["nim" => "672019003", "nama" => "Tono", "ipk" => 2.7],
    ["nim" => "672019004", "nama" => "Suryadi", "ipk" => 3.4]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PBP - ARRAY ASOSIATIF - 672019084</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            /*width: 25%;*/
            padding: 15px;
        }
    </style>
</head>

<body>
    <h1>Tugas 5 PBP - ARRAY ASOSIATIF - 672019084</h1>
    <br>
    <form action="" method="post">
        FILTER NIM <input type="text" name="filter">
        <input type="submit" value="Filter">
    </form>
    <br>
    <table>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK</th>
        </tr>
        <?php $i = 0; ?>
        <?php
        if (isset($_POST['filter'])) {
            for ($j = 0; $j < sizeof($mahasiswa); $j++) {
                $index = array_search($_POST['filter'], array_column($mahasiswa, 'nim'));
            }
            if (!is_bool($index)) {
        ?>
                <tr>
                    <td><?= $i + 1; ?></td>
                    <td><?= $mahasiswa[$index]["nim"]; ?></td>
                    <td><?= $mahasiswa[$index]["nama"]; ?></td>
                    <td><?= $mahasiswa[$index]["ipk"]; ?></td>
                </tr>
                <?php
            } else {
                foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?= $i + 1; ?></td>
                        <td><?= $mhs["nim"]; ?></td>
                        <td><?= $mhs["nama"]; ?></td>
                        <td><?= $mhs["ipk"]; ?></td>
                    </tr>
                    <?php $i++; ?>
            <?php
                endforeach;
            };
            ?>
            <?php
        } else {
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $i + 1; ?></td>
                    <td><?= $mhs["nim"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["ipk"]; ?></td>
                </tr>
                <?php $i++; ?>
        <?php
            endforeach;
        }
        ?>
    </table>
</body>

</html>