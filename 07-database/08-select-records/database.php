<?php

// Database configuration
$host = 'localhost';
$port = '3306';
$db_name = 'blog2';
$username = 'gus';
$password = '013527';


// Connection string (DSN)
$dsn = "mysql:host={$host};port={$port};dbname={$db_name};charset=utf8";

try {
  // Create a PDO instance
  $pdo = new PDO($dsn, $username, $password);

  // Set PDO to throw exceptions on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Fetch as Assoc array (will change the format of results of queries to be more readable)
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
  
} catch (PDOException $e) {
  // If there is an error with the connection, catch it here
  echo "Connection failed: " . $e->getMessage();
}
