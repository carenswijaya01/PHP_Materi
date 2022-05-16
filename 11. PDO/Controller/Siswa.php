<?php
include '../Model/SiswaModel.php';
$siswa = new SiswaModel();
$detail = array();

if (isset($_POST['insert'])) {
    if ($siswa->insert($_POST['nis'], $_POST['nama'])) {
        echo "<script>alert('Berhasil Insert Data')</script>";
        header('Location: ../View/index.php');
    } else {
        echo "<script>alert('Gagal Insert Data')</script>";
        header('Location: ../View/index.php');
    }
}

if (isset($_POST['hapus'])) {
    if ($siswa->hapus($_POST['nis'])) {
        echo "<script>alert('Berhasil Hapus Data')</script>";
        header('Location: ../View/index.php');
    } else {
        echo "<script>alert('Gagal Hapus Data')</script>";
        header('Location: ../View/index.php');
    }
}

if (isset($_POST['edit'])) {
    header('Location: ../View/edit.php?nis=' . $_POST['nis']);
}

if (isset($_POST['simpan'])) {
    if ($siswa->ubah($_POST['id'], $_POST['nis'], $_POST['nama'])) {
        echo "<script>alert('Berhasil Edit Data')</script>";
        header('Location: ../View/index.php');
    } else {
        echo "<script>alert('Gagal Edit Data')</script>";
        header('Location: ../View/index.php');
    }
}
