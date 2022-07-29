<?php

    // header hasil berbentuk json
    header("Content-Type:application/json");

   // mendefinisikan metode akses
   $method = $_SERVER['REQUEST_METHOD'];
   
   // variabel hasil
   $result = array();

   //cek metode
   if($method=='GET'){

        //pengecekan parameter
        if(isset($_GET['kategori'])){
            //tangkap parameter
            $kategori = $_GET['kategori'];

                // jika metode sesuai
                $result['status'] = [
                    "code" => 200,
                    "description" => 'Request Valid'
                ];
                
                // Star : koneksi database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "jobinfo";
                //create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Eror : koneksi database

                // buat query
                $sql = "SELECT * FROM komputer WHERE kategori='$kategori'";
                // eksekusi quer 
                $hasil_query = $conn->query($sql);
                // masukkan ke array result
                $result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
        }else{
            $result['status']= [
                "code" => 402,
                "description" => 'Parameter Invalid'
            ];
        }
    }else{
        $result['status'] = [
            "code" => 401,
            "description" => 'Request Invalid'
        ];
    }
   // tampilkan data bentuk json
   echo json_encode($result);
?>