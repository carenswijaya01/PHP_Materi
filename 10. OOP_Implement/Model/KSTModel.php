<?php
class KSTModel
{
    public $kst = [
        ["kode" => 'IN311C', "hari" => 'Sabtu', 'jam' => '13.00 - 16.00', 'matkul' => 'PEMODELAN DAN SIMULASI C', 'dosen' => 'CHARITAS FIBRIANI'],
        ["kode" => 'IN312C', "hari" => 'Kamis', 'jam' => '13.00 - 16.00', 'matkul' => 'KEAMANAN DATA C', 'dosen' => 'ALZ DANNY WOWOR'],
        ["kode" => 'IN315B', "hari" => 'Senin', 'jam' => '09.00 - 12.00', 'matkul' => 'PEMROGRAMAN BEORIENTASI PLATFORM B', 'dosen' => 'YERYMIA ALFA SUSETYO'],
        ["kode" => 'IN316A', "hari" => 'Rabu', 'jam' => '13.00 - 16.00', 'matkul' => 'PEMROGRAMAN LANJUT A', 'dosen' => 'YOS RICHARD BEEH'],
        ["kode" => 'IN318', "hari" => 'Selasa', 'jam' => '13.00 - 16.00', 'matkul' => 'SISTEM BASIS DATA 2', 'dosen' => 'SRI YULIANTO JOKO PRASETYO']
    ];

    public function getAll_KST()
    {
        return $this->kst;
    }

    public function getDetail($kode)
    {
        foreach ($this->kst as $ls) {
            if ($ls['kode'] == $kode) {
                return array("kode" => $ls['kode'], "hari" => $ls['hari'], 'jam' => $ls['jam'], 'matkul' => $ls['matkul'], 'dosen' => $ls['dosen']);
            }
        }
    }
}
