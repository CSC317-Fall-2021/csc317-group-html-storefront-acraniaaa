<?php
//create user
$servername = "localhost";
$username = "user";
$password = "password";
// CONNECTION TO CREATE DATABASES
$conn = new mysqli($servername, $username, $password);
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS main";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
echo "<br>";
//copy and paste lines 11 to 17 and replace database name under this
$conn->close();
$database = "main";
$conn = new mysqli($servername, $username, $password, $database);
$sql = "CREATE TABLE products (
  id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  color VARCHAR(30) NOT NULL,
  product_type VARCHAR(30) NOT NULL,
  img IMAGE NOT NULL,
  product_price VARCHAR(20) NOT NULL
  )";
//create new table under here
if ($conn->query($sql) === TRUE) {
  echo "Table products created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>