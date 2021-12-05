<?php
//create user
$servername = "localhost";
$username = "user";
$password = "password";
// CONNECTION TO CREATE DATABASES
$conn = new mysqli($servername, $username, $password);
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS main";
$conn->query($sql);
echo "<br>";
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
$conn->query($sql);
  //User Info
$sql = "CREATE TABLE IF NOT EXISTS userInfo (
  first_name VARCHAR (50) NOT NULL,
  last_name VARCHAR (50) NOT NULL,
  username VARCHAR (50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  pass_word VARCHAR(50) NOT NULL
  )";
$conn->query($sql);
  //Login Info
$sql = "CREATE TABLE IF NOT EXISTS loginInfo (
  username VARCHAR(50) NOT NULL,
  pass_word VARCHAR(50) NOT NULL
  )";
$conn->query($sql);

$conn->close();
?>