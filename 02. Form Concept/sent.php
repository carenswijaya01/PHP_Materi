<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENDAFTARAN_672019084</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            width: 25%;
            padding: 15px;
        }
    </style>
</head>

<body>
    <form action="receive.php" method="post">
        <table>
            <tr style="background-color: green; color: white;">
                <th colspan="2">FORM PENDAFTARAN</th>
            </tr>
            <tr style="background-color: lightgreen;">
                <td><b>Nama</b></td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr style="background-color: lightgrey;">
                <td><b>Alamat</b></td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr style="background-color: lightgreen;">
                <td><b>Jenis Kelamin</b></td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki" required>Laki-Laki<br>
                    <input type="radio" name="jk" value="Perempuan" required>Perempuan<br>
                </td>
            </tr>
            <tr style="background-color: lightgrey;">
                <td><b>Pekerjaan</b></td>
                <td>
                    <select name="pekerjaan" id="">
                        <option value="Pelajar">Pelajar</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Pegawai">Pegawai</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                    </select>
                </td>
            </tr>
            <tr style="background-color: lightgreen;">
                <td colspan="2"><input type="submit" value="Kirim" style="margin: auto; display: block"></td>
            </tr>
        </table>
    </form>
</body>

</html>