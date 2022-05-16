<?php
include '../Model/KalkulatorModel.php';

class Kalkulator
{
    protected $kalkulator;
    public function __construct()
    {
        $this->kalkulator = new KalkulatorModel();
        if (isset($_POST['tambah'])) {
            $this->kalkulator->nilai1 = $_POST['nilai1'];
            $this->kalkulator->nilai2 = $_POST['nilai2'];
        }
    }
    public function cetakTambah()
    {
        return $this->kalkulator->tambah();
    }

    public function cetakKeterangan()
    {
        return $this->kalkulator->cek();
    }
}
