<?php
class KalkulatorModel
{
    public $nilai1, $nilai2, $hasil, $keterangan;

    public function tambah()
    {
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }

    public function cek()
    {
        if ($this->hasil == 0) {
            $this->keterangan = "Bilangan nol";
        } else if ($this->hasil % 2 == 0) {
            $this->keterangan = "Bilangan Genap";
        } else {
            $this->keterangan = "Bilangan Ganjil";
        }
        return $this->keterangan;
    }
}
