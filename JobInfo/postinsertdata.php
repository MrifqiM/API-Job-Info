<?php

    // header hasil berbentuk json
    header("Content-Type:application/json");
    
    // tangkap metode
    $method = $_SERVER['REQUEST_METHOD'];

    // variable hasil
    $result = array();

    if ($method=='POST') {
        
        // pengecekan parameter
        if (isset($_POST['kategori']) AND isset($_POST['nama_perusahaan']) AND isset($_POST['penyebar']) AND isset($_POST['tanggal_sebar']) AND isset($_POST['posisi']) AND isset($_POST['persyaratan']) AND isset($_POST['email']) AND isset($_POST['alamat']) AND isset($_POST['batas_pengumpulan'])){
                       
            // menangkap parameter
            $kategori    = $_POST['kategori'];
            $nama_perusahaan    = $_POST['nama_perusahaan'];
            $penyebar   = $_POST['penyebar'];
            $tanggal_sebar = $_POST['tanggal_sebar'];
            $posisi   = $_POST['posisi'];
            $persyaratan   = $_POST['persyaratan'];
            $email   = $_POST['email'];
            $alamat   = $_POST['alamat'];
            $batas_pengumpulan   = $_POST['batas_pengumpulan'];


            // jika metode sesuai
            $result['status'] = [
                "code" => 200,
                "description" => '1 Data Inserted'
            ];

            // koneksi database
            $servername = "localhost";
            $username   = "root";
            $password   = "";
            $dbname     = "jobinfo";

            $conn = new mysqli($servername, $username, $password, $dbname);

            //buat query
            $sql = "INSERT INTO komputer(kategori,nama_perusahaan, penyebar, tanggal_sebar, posisi, persyaratan, email, alamat, batas_pengumpulan) 
                    VALUES ('$kategori','$nama_perusahaan', '$penyebar', '$tanggal_sebar', '$posisi', '$persyaratan', '$email', '$alamat', '$batas_pengumpulan')";
            // eksekusi query
            $hasil_query = $conn->query($sql);
            
            // masukkan ke array result
            $result['results'] = [
                "kategori" => $kategori,
                "nama_perusahaan" => $nama_perusahaan,
                "penyebar" => $penyebar,
                "tanggal_sebar" => $tanggal_sebar,
                "posisi" => $posisi,
                "persyaratan" => $persyaratan,
                "email" => $email,
                "alamat" => $alamat,
                "batas_pengumpulan" => $batas_pengumpulan
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