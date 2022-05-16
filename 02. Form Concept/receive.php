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
    <table>
        <tr style="background-color: green; color: white;">
            <th colspan="2">FORM PENDAFTARAN</th>
        </tr>
        <tr style="background-color: lightgreen;">
            <td><b>Nama</b></td>
            <td><?= $_POST["nama"]; ?></td>
        </tr>
        <tr style="background-color: lightgrey;">
            <td><b>Alamat</b></td>
            <td><?= $_POST["alamat"]; ?></td>
        </tr>
        <tr style="background-color: lightgreen;">
            <td><b>Jenis Kelamin</b></td>
            <td><?= $_POST["jk"]; ?></td>
        </tr>
        <tr style="background-color: lightgrey;">
            <td><b>Pekerjaan</b></td>
            <td><?= $_POST["pekerjaan"]; ?></td>
        </tr>
        </form>
</body>

</html>