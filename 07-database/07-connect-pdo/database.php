<?php

//DATABASE INFO
$host = 'localhost';
$port = '3306';
$db_name = 'blog';
$username = 'gus';
$password = '013527';

$dsn = "mysql:host={$host};port={$port};dbname={$db_name};charset=utf8";


try {
    //Create PDO instance
    $pdo = new PDO($dsn, $username, $password);

    //Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'database connected...';
} catch (PDOException $e) {
    //If there is an error, catch it here
    echo 'Connection failed: ' . $e->getMessage();
}
