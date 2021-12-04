<?php
//create user
$servername = "localhost";
$username = "user";
$password = "password";
// Create connection
$conn = new mysqli($servername, $username, $password);
//see if i can create a new user to be able to connect to the server with privileges 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS cosmos";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>