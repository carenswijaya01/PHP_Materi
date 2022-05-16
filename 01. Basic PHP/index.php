<?php
    //ini pertemuan 2 - Syntax PHP

    //Output : echo, print, print_r (untuk array), var_dump (untuk lihat isi variabel)
        //echo "Carens"; //Carens -> umumnya
        //print "Carens"; //Carens
        //print_r ("Carens"); //Carens
        //var_dump("Carens"); //string(6) "Carens"

    //Variabel
        //$nama_depan = "Carens";
        //$nama_belakang = "Wijaya";
        //echo $nama_depan . " " . $nama_belakang;
        //====================================================
        //$nama = "Carens";
        //$nama .= " ";
        //$nama .= "Wijaya";
        //echo $nama;

    //Choice : if else, switch case

    //Looping : for, while, do while
    
    //Function
        //function cetakNama($waktu, $user = "Admin"){
            //return "Selamat $waktu, $user";
        //}

    //Array
    //A. Array biasa
        //$mahasiswa = ["Carens", "Uwu"];
        //echo $mahasiswa[1];
    //B. Array Asosiatif = Dictionary,
        /*
        $mahasiswa2 = [
            [
                "nama" => "Carens",
                "umur" => 17,
            ],
            [
                "nama" => "Uwu",
                "umur" => [21, 22, 23]
            ],
        ];
        echo $mahasiswa2[0]["nama"] . " " . $mahasiswa2[0]["umur"]; //Carens 17
        echo $mahasiswa2[1]["umur"][1]; //22
        */
?>