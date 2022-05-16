<?php
class BarangModel
{
    public $total;
    public $barang = [
        ["nama" => 'Baygon', "harga" => 45000],
        ["nama" => 'Nutrisari', "harga" => 5000]
    ];

    public function getBarang($data = false)
    {
        foreach ($this->barang as $ls) {
            if ($ls['nama'] == $data) {
                return array('nama' => $ls['nama'], 'harga' => $ls['harga']);
            }
        }
        return $this->barang;
    }

    public function getTotal()
    {
        foreach ($this->barang as $ls) {
            $this->total += $ls['harga'];
        }
        return $this->total;
    }
}
