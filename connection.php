<?php
    $host = "localhost";
    $username = "root";
    $password = "admin";

    $connection = new mysqli($host, $username, $password);
    
    if ($connection->connect_error) {
        die("Lost");
    }else{
        echo "Berhasil";
    }
?>