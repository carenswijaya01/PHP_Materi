<?php
class UserModel
{
    public $kst = [
        ["nim" => '672019084', 'nama' => 'Carens Kurniawan Wijaya', "pass" => '1sampai8'],
        ["nim" => '672019000', 'nama' => 'Tejo Sujono', "pass" => '1sampai8']
    ];

    public function cekLogin($nim, $pass)
    {
        foreach ($this->kst as $ls) {
            if ($ls['nim'] == $nim && $ls['pass'] == $pass) {
                return true;
            }
        }
        return false;
    }

    public function getNama_nim($nim)
    {
        foreach ($this->kst as $ls) {
            if ($ls['nim'] == $nim) {
                return $ls['nama'];
            }
        }
    }
}
