<?php
$servername = "localhost";
$username = "preeti1124";
$password = "11241124";

try {
    $conn = new PDO("mysql:host=$servername;dbname=flame", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }