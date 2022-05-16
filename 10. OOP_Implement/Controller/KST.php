<?php
include '../Model/KSTModel.php';
class KST
{
    protected $kst;
    public function __construct()
    {
        $this->kst = new KSTModel();
    }

    public function cetakData()
    {
        return $this->kst->getAll_KST();
    }

    public function cetakDetail($kode)
    {
        return $this->kst->getDetail($kode);
    }
}
