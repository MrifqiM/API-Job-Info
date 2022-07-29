<?php

    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $token= md5($uname.$pwd);

    // cek user 
    $sql = "UPDATE user SET key_token='$token'  WHERE username='$uname'AND password= '$pwd'";
    $result = $conn->query($sql);


    echo "key/Token API anda: ".$token;

      // cek user 
    $sql = "SELECT * FROM user WHERE username='$uname'AND password= '$pwd'";
    $result = $conn->query($sql);


     // Star : koneksi database
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "jobinfo";
    
     //create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     

     
?>