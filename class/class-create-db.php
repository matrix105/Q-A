<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$db = new mysqli($servername, $username, $password);
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Create database
$sql = "CREATE DATABASE qna";
if ($db->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $db->error;
}

$mysqli->select_db("qna");

// sql to create table
$sql = "CREATE TABLE `users` (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(30) UNIQUE NOT NULL,
    `emailid` VARCHAR(30) UNIQUE NOT NULL,
    `password` VARCHAR(30) NOT NULL
  );
  
  CREATE TABLE `survey` (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
    `users` INTEGER NOT NULL,
    `quest1` DOUBLE,
    `quest2` DOUBLE,
    `quest3` DOUBLE,
    `quest4` DOUBLE,
    `quest5` VARCHAR(255) NOT NULL,
    `quest6` VARCHAR(255) NOT NULL,
    `quest7` VARCHAR(255) NOT NULL
  );
  
  CREATE INDEX `idx_survey__users` ON `survey` (`users`);
  
  ALTER TABLE `survey` ADD CONSTRAINT `fk_survey__users` FOREIGN KEY (`users`) REFERENCES `users` (`id`)";
    
    if ($db->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $db->error;
    }


$db->close();
?>