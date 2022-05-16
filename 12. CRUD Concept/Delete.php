<?php 
    //manggil php koneksi
    require "DAO.php";

    //terima status
    $status = $_GET["status"];

    if($status == "mahasiswa"){
        if(qdelete($_GET["nim"], "mahasiswa") > 0){
            echo "
            <script>
                alert('BERHASIL MENGHAPUS DATA MAHASISWA');
                document.location.href='CRUD_Dasar.php';
            </script>
            ";
        }else{
            echo "
            <script>
                alert('GAGAL MENGHAPUS DATA MAHASISWA');
                document.location.href='CRUD_Dasar.php';
            </script>
            ";
        }
    }else if($status == "dosen"){
        if(qdelete($_GET["nim"], "dosen") > 0){
            echo "
            <script>
                alert('BERHASIL MENGHAPUS DATA DOSEN');
                document.location.href='CRUD_Dasar.php';
            </script>
            ";
        }else{
            echo "
            <script>
                alert('GAGAL MENGHAPUS DATA DOSEN');
                document.location.href='CRUD_Dasar.php';
            </script>
            ";
        }
    }
?>