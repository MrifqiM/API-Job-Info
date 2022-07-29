<?php

    // header hasil dalam bentuk json
    header("Content-Type:application/json");

    // tangkap key
    $header = apache_request_headers();
    $key = $header['key'];
    
    // menangkap metode akses
    $method = $_SERVER['REQUEST_METHOD'];

    // variabel hasil
    $result = array();

    // S:koneksi database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jobinfo";
    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // E:koneksi database

    // cek user
    $sql = "SELECT * FROM user WHERE key_token='$key'";
    $user = $conn->query($sql);

    if ($user->num_rows > 0) {
        // user valid
        // mengecek metode
        if($method=='GET'){
            // jika metode sesuai
            $result['status'] = [
                "code" => 200,
                "description" => 'Request Valid'
            ];

            // membuat query
            $sql = "SELECT * FROM komputer";
            // mengeksekusi query
            $hasil_query = $conn->query($sql);
            // masukkan ke array result
            $result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
            
        }else{
            $result['status'] = [
                "code" => 401,
                "description" => 'Request Invalid'
            ];
        }
    }else{
        $result['status'] = [
            "code" => 400,
            "description" => 'API Key/Token Not Valid'
        ];
    }

    // menampilkan data dalam format json
    echo json_encode($result);    

?>