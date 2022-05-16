<?php 
    //manggil php koneksi
    require "DAO.php";

    //terima status
    $status = $_GET["status"];

    //terima nim
    $nim = $_GET["nim"];

    if($status == "mahasiswa"){
        $mhs = qselect("SELECT * FROM mahasiswa WHERE nim = '$nim'")[0];
    }else if($status == "dosen"){
        $dsn = qselect("SELECT * FROM dosen WHERE nim = '$nim'")[0];
    }

    //cek apakah tombol edit sudah di klik
    if(isset($_POST["submit"])){
        if($status == "mahasiswa"){
            if(qedit($_POST, "mahasiswa") != -1){
                echo "
                <script>
                    alert('BERHASIL MENGUBAH DATA MAHASISWA');
                    document.location.href='CRUD_Dasar.php';
                </script>
                ";
            }else{
                echo "
                <script>
                    alert('GAGAL MENGUBAH DATA MAHASISWA');
                    document.location.href='CRUD_Dasar.php';
                </script>
                ";
            }
        }else if($status == "dosen"){
            if(qedit($_POST, "dosen") != -1){
                echo "
                <script>
                    alert('BERHASIL MENGUBAH DATA DOSEN');
                    document.location.href='CRUD_Dasar.php';
                </script>
                ";
            }else{
                echo "
                <script>
                    alert('GAGAL MENGUBAH DATA DOSEN');
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
    <h1>edit data <?= $status; ?></h1>
    <?php 
        if($status == "mahasiswa"){ ?>
        <form action="" method="post">
            <!--<input type="hidden" name="id" value="<?= $mhs["id"]; ?>"-->
            <label for="nim">NIM : </label>
            <input type="text" id="nim" name="nim" required value="<?= $mhs["nim"] ?>"><br><br>

            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" required value="<?= $mhs["nama"] ?>"><br><br>

            <label for="jurusan">Jurusan : </label>
            <input type="text" id="jurusan" name="jurusan" required value="<?= $mhs["jurusan"] ?>"><br><br>

            <label for="alamat">Alamat : </label>
            <input type="text" id="alamat" name="alamat" required value="<?= $mhs["alamat"] ?>"><br><br>

            <label for="telepon">Telepon : </label>
            <input type="text" id="telepon" name="telepon" required value="<?= $mhs["telepon"] ?>"><br><br>

            <button type="submit" name="submit">
                Simpan Perubahan
            </button>
        </form>
    <?php } else if($status == "dosen"){ ?>
        <form action="" method="post">
            <label for="nim">NIM : </label>
            <input type="text" id="nim" name="nim" required value="<?= $dsn["nim"] ?>"><br><br>

            <label for="nama">Nama : </label>
            <input type="text" id="nama" name="nama" required value="<?= $dsn["nama"] ?>"><br><br>

            <label for="jurusan">Jurusan : </label>
            <input type="text" id="jurusan" name="jurusan" required value="<?= $dsn["jurusan"] ?>"><br><br>

            <label for="lulusan">Lulusan : </label>
            <input type="text" id="lulusan" name="lulusan" required value="<?= $dsn["lulusan"] ?>"><br><br>

            <label for="alamat">Alamat : </label>
            <input type="text" id="alamat" name="alamat" required value="<?= $dsn["alamat"] ?>"><br><br>

            <label for="telepon">Telepon : </label>
            <input type="text" id="telepon" name="telepon" required value="<?= $dsn["telepon"] ?>"><br><br>

            <button type="submit" name="submit">
                Tambah Data
            </button>
        </form>
    <?php } ?>
</body>
</html>