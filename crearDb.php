<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=llevame_db", $username, $password);
    }
catch(PDOException $e)
    { 
    echo "Connection failed: " . $e->getMessage();
    }

$query = $conn->exec("CREATE TABLE `haychanga_db`.`user` (
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` CHAR(60) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`));");



?>
