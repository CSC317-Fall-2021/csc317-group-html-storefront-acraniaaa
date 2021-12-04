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
$sql = "CREATE TABLE IF NOT EXISTS products (
  id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  color VARCHAR(30) NOT NULL,
  product_type VARCHAR(30) NOT NULL,
  product_price VARCHAR(30) NOT NULL,
  image_path VARCHAR(50) NOT NULL
  )";

  //User Info
  $sql = "CREATE TABLE IF NOT EXISTS userInfo (
    first_name VARCHAR (50) NOT NULL,
    last_name VARCHAR (50) NOT NULL,
    username VARCHAR (50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pass_word VARCHAR(50) NOT NULL
    )";

  //Login Info
  $sql = "CREATE TABLE IF NOT EXISTS loginInfo (
    username VARCHAR(50) NOT NULL,
    pass_word VARCHAR(50) NOT NULL
    )";

//create new table under here
if ($conn->query($sql) === TRUE) {
  echo "Table products created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>