<?php

class SiswaModel
{
    protected $con;
    public function __construct()
    {
        //$this->con = mysqli_connect('localhost', 'root', '', 'db_siswa');
        $this->con = new PDO("mysql:host=localhost;dbname=db_siswa", 'root', '');
    }
    public function getAll()
    {
        //mysqli_query($this->con, $query);
        $query = $this->con->prepare('SELECT * FROM tb_siswa');
        $query->execute();
        return $query->fetchAll();
    }

    public function insert($nis, $nama)
    {
        //$query = $this->con->prepare("INSERT INTO tb_siswa (nis, nama_siswa) VALUES ('" . $nis . "', '" . $nama . "')");
        $query = $this->con->prepare("INSERT INTO tb_siswa (nis, nama_siswa) VALUES (:nis, :nama)");
        $query->bindParam(":nis", $nis);
        $query->bindParam(":nama", $nama);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function hapus($a)
    {
        $query = $this->con->prepare("DELETE FROM tb_siswa WHERE nis=:nis");
        $query->bindParam(":nis", $a);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function ubah($key, $na, $nb)
    {
        $query = $this->con->prepare("UPDATE tb_siswa SET nis=:nis,nama_siswa=:nama WHERE no=:id");
        $query->bindParam(":nis", $na);
        $query->bindParam(":nama", $nb);
        $query->bindParam(":id", $key);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getDetail($nis)
    {
        $query = $this->con->prepare('SELECT * FROM tb_siswa WHERE nis=:nis');
        $query->bindParam(":nis", $nis);
        $query->execute();
        return $query->fetchAll();
    }
}
