<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jontrodokan";

    
    $conn = new  MySQLi($host, $username, $password, $dbname);
    if (!$conn) {
        die('Database connection failed: ' . mysqli_connect_error());
    }else{
        echo 'Database connection successful';
    }