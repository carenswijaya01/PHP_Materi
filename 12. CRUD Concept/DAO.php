<?php 
    $conn = mysqli_connect("localhost", "root", "", "crud_dasar");

    //untuk read data
    function qselect($query){
        global $conn;
        $result = mysqli_query($conn, $query);

        //temp kosong
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }

        //balikin hasil select
        return $rows;
    }

    //untuk insert data
    function qinsert($datas, $namatabel){
        global $conn;

        //nyimpen semua data ke array
        $temp = [];
        foreach($datas as $data){
            $temp[] = $data;
        }
        
        //bikin sql yang looping sesuai banyak data
        $query = "INSERT INTO $namatabel VALUES (";
        for($i = 0; $i < sizeof($temp); $i++){
            if($i == sizeof($temp)-2){
                $query .= "'" . htmlspecialchars($temp[$i]) . "')";
            }else if ($i != sizeof($temp)-1){
                $query .= "'" . htmlspecialchars($temp[$i]) . "', ";
            }
        }
        mysqli_query($conn, $query);

        //balikin status insert berhasil / tidak
        return mysqli_affected_rows($conn); //lebih dari 0 berhasil, -1 gagal
    }

    //untuk hapus
    function qdelete($id, $namatabel){
        global $conn;
        mysqli_query($conn, "DELETE FROM $namatabel WHERE nim = '$id'");

        //balikin status delete berhasil / tidak
        return mysqli_affected_rows($conn); //lebih dari 0 berhasil, -1 gagal
    }

    //untuk edit
    function qedit($datas, $namatabel){
        global $conn;

        //nyimpen semua data ke array
        $temp = [];
        foreach($datas as $data){
            $temp[] = $data;
        }

        //dapetin indeks id
        $id = $datas["nim"];

        //ngambil nama kolom di database
        $column_sql = $conn->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'crud_dasar' AND TABLE_NAME = '$namatabel'");
        $column_temp = [];
        while($column = $column_sql->fetch_assoc()){
            $column_temp[] = $column;
        }
        $column_name = array_column($column_temp, 'COLUMN_NAME');

        //bikin sql yang looping sesuai banyak data
        $query = "UPDATE $namatabel SET ";
        for($i = 0; $i < sizeof($temp); $i++){
            if($i == sizeof($temp)-2){
                $query .= "$column_name[$i] = " . "'" . htmlspecialchars($temp[$i]) . "'" . " WHERE nim = '$id'";
            }else if ($i != sizeof($temp)-1){
                $query .= "$column_name[$i] = " . "'" . htmlspecialchars($temp[$i]) . "'" . ", ";
            }
        }

        mysqli_query($conn, $query);

        //balikin status insert berhasil / tidak
        return mysqli_affected_rows($conn); //lebih dari 0 berhasil, -1 gagal
    }

    function qsearch($keyword, $namatabel){
        $query = "SELECT * FROM $namatabel WHERE
        nim LIKE '%$keyword%' OR
        nama LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%' OR
        alamat LIKE '%$keyword%' OR
        telepon LIKE '%$keyword%'
        ";

        return qselect($query);
    }
?>