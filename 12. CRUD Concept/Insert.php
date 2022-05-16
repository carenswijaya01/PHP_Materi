<?php 
    //manggil php koneksi
    require "DAO.php";

    //terima status
    $status = $_GET["status"];

    //cek apakah tombol tambah sudah di klik
    if(isset($_POST["submit"])){
        if($status == "mahasiswa"){
            if(qinsert($_POST, "mahasiswa") > 0){
                echo "
                <script>
                    alert('BERHASIL MENAMBAH DATA MAHASISWA');
                    document.location.href='CRUD_Dasar.php';
                </script>
                ";
            }else{
                echo "
                <script>
                    alert('GAGAL MENAMBAH DATA MAHASISWA');
                    document.location.href='CRUD_Dasar.php';
                </script>
                ";
            }
        }else if($status == "dosen"){
            if(qinsert($_POST, "dosen") > 0){
                echo "
                <script>
                    alert('BERHASIL MENAMBAH DATA DOSEN');
                    document.location.href='CRUD_Dasar.php';
                </script>
                ";
            }else{
                echo "
                <script>
                    alert('GAGAL MENAMBAH DATA DOSEN');
                    document.location.href='CRUD_Dasar.php';
                </script>
                ";
            }
        }
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
    <h1>tambah data <?= $status; ?></h1>
    <?php 
        if($status == "mahasiswa"){ ?>
        <form action="" method="post">
            <label for="nim">NIM : </label>
            <input type="text" id="nim" name="nim" required><br><br>

            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="jurusan">Jurusan : </label>
            <input type="text" id="jurusan" name="jurusan" required><br><br>

            <label for="alamat">Alamat : </label>
            <input type="text" id="alamat" name="alamat" required><br><br>

            <label for="telepon">Telepon : </label>
            <input type="text" id="telepon" name="telepon" required><br><br>

            <button type="submit" name="submit">
                Tambah Data
            </button>
        </form>
    <?php } else if($status == "dosen"){ ?>
        <form action="" method="post">
            <label for="nim">NIM : </label>
            <input type="text" id="nim" name="nim" required><br><br>

            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="jurusan">Jurusan : </label>
            <input type="text" id="jurusan" name="jurusan" required><br><br>

            <label for="lulusan">Lulusan : </label>
            <input type="text" id="lulusan" name="lulusan" required><br><br>

            <label for="alamat">Alamat : </label>
            <input type="text" id="alamat" name="alamat" required><br><br>

            <label for="telepon">Telepon : </label>
            <input type="text" id="telepon" name="telepon" required><br><br>

            <button type="submit" name="submit">
                Tambah Data
            </button>
        </form>
    <?php } ?>
</body>
</html>