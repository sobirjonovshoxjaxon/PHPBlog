<?php
    $servername = "MySQL-5.7";
    $username = "root";
    $password = "";
    $database = "phpblog";

    try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
?>