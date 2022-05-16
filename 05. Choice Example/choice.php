<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP_Choice_672019084</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h3>DAFTAR BARANG TOKO</h3>
    <form action="" method="post">
        <table border="1" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Beli</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Keyboard</td>
                <td>Rp 80.000,00</td>
                <td>
                    <input type="checkbox" name="beli[]" value="Keyboard"><br>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mouse</td>
                <td>Rp 100.000,00</td>
                <td>
                    <input type="checkbox" name="beli[]" value="Mouse"><br>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Monitor</td>
                <td>Rp 600.000,00</td>
                <td>
                    <input type="checkbox" name="beli[]" value="Monitor"><br>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Printer</td>
                <td>Rp 1.000.000,00</td>
                <td>
                    <input type="checkbox" name="beli[]" value="Printer"><br>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Speaker</td>
                <td>Rp 300.000,00</td>
                <td>
                    <input type="checkbox" name="beli[]" value="Speaker"><br>
                </td>
            </tr>
        </table>
        <br><input type="submit" value="BELANJA">
    </form>

    <br>
    <br>

    <?php
    $totalharga = 0;
    if (isset($_POST['beli']) && is_array($_POST['beli'])) {

        echo '<h3>DETAIL PEMBAYARAN</h3>';
        echo '<table border="1" cellspacing="0">';
        echo '<tr><th colspan="2">KERANJANG BELANJA</th></tr>';

        for ($i = 0; $i < sizeof($_POST['beli']); $i++) {

            echo '<tr><td>' . $_POST['beli'][$i] . '</td>';

            if ($_POST['beli'][$i] == "Keyboard") {
                echo '<td>Rp    80.000,00</td>';
                $totalharga = $totalharga + 80000;
            } else if ($_POST['beli'][$i] == "Mouse") {
                echo '<td>Rp    100.000,00</td>';
                $totalharga = $totalharga + 100000;
            } else if ($_POST['beli'][$i] == "Monitor") {
                echo '<td>Rp    600.000,00</td>';
                $totalharga = $totalharga + 600000;
            } else if ($_POST['beli'][$i] == "Printer") {
                echo '<td>Rp    1.000.000,00</td>';
                $totalharga = $totalharga + 1000000;
            } else if ($_POST['beli'][$i] == "Speaker") {
                echo '<td>Rp    300.000,00</td>';
                $totalharga = $totalharga + 300000;
            }

            echo '</tr>';
        }
        echo '<tr><td><b>Total Harga</b></td><td><b>Rp  ' . number_format($totalharga, 2, ',', '.') . '</b></td></tr>';
        echo '</table>';
    }
    ?>

</body>

</html>