<?php
include '../Model/BarangModel.php';
class Barang
{
    protected $barang;
    public function __construct()
    {
        $this->barang = new BarangModel();
    }

    public function cetakData()
    {
        if (isset($_POST['submit'])) {
            $data = $_POST['filter'];
            return $this->barang->getBarang($data);
        }
        return $this->barang->getBarang();
    }

    public function cetakTotal()
    {
        return $this->barang->getTotal();
    }
}
