<?php
    
    // header hasil berbentuk json
    header("Content-Type:application/json");

    // tangkap metode
    $method = $_SERVER['REQUEST_METHOD'];

    // variable hasil
    $result = array();

    if ($method=='DELETE') {

        // var_dump(file_get_contents("php://input"));
        parse_str(file_get_contents("php://input"), $_DELETE);

        
        // pengecekan parameter
        if (isset($_DELETE['id_komputer'])){

            // menangkap parameter
            $id_komputer = $_DELETE['id_komputer'];

            // jika metode sesuai
            $result['status'] = [
                "code" => 200,
                "description" => '1 Data Deleted'
            ];

            // koneksi database
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $dbname     = "jobinfo";

            $conn = new mysqli($servername, $username, $password, $dbname);

            //buat query
            $sql = "DELETE FROM komputer WHERE id_komputer='$id_komputer'";
            // eksekusi query
            $hasil_query = $conn->query($sql);
            
            // masukkan ke array result
            $result['results'] = [
                "id_komputer" => $id_komputer
            ];

        } else {
            $result['status'] = [
                "code" => 400,
                "description" => 'Parameter Invalid'
            ];
        }

    } else {
        // jika metode tidak sesuai
        $result['status'] = [
            "code" => 400,
            "description" => 'Method Not Valid'
        ];
    }

    // tampilkan data dalam format json
    echo json_encode($result);

?>