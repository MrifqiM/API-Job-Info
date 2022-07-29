<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        $apikey = md5($username.$password);
        
        $servername = "localhost";
        $uname = "root";
        $pass = "";
        $dbname = "jobinfo";

        $conn = new mysqli($servername, $uname, $pass, $dbname);
        
        $sql = "INSERT INTO user(username, pass, key_token) VALUES ('$username', '$password', '$apikey')";
        $conn->query($sql);
        
        header("Location: index.php");
    }else{
        echo '<script>alert("FATAL ERROR! You are not supposed to be here. Go anywhere else!")</script>';
        echo "<script>location.href = 'index.php';</script>";
    }
?>