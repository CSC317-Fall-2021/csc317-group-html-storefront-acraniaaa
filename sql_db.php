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
  color VARCHAR(50) NOT NULL,
  product_type VARCHAR(50) NOT NULL,
  product_price VARCHAR(50) NOT NULL,
  product_size VARCHAR(50) NOT NULL,
  product_quantity VARCHAR (50) NOT NULL,
  image_path VARCHAR(50) NOT NULL
  )";
$conn->query($sql);
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
echo "<br>";
$conn->query($sql);

$sql = "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('White', 'Copy', '10.99', '8.5in. x 11in.', '500 Sheets', 'Images/paperWhite.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Yellow', 'Copy', '12.99', '8.5in. x 11in.', '500 Sheets', 'Images/paperYellow.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Red', 'Copy', '12.99', '8.5in. x 11in.', '500 Sheets', 'Images/paperRed.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Purple', 'Copy', '12.99', '8.5in. x 11in.', '500 Sheets', 'Images/paperPurple.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Blue', 'Copy', '12.99', '8.5in. x 11in.', '500 Sheets', 'Images/paperBlue.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Pink', 'Copy', '12.99', '8.5in. x 11in.', '500 Sheets', 'Images/paperPink.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('White', 'Kraft', '33.99', '48in. x 200ft.', '1 Roll', 'Images/craftWhite.jpg');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Yellow', 'Kraft', '35.99', '48in. x 200ft.', '1 Roll', 'Images/craftYellow.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Red', 'Kraft', '35.99', '48in. x 200ft.', '1 Roll', 'Images/craftRed.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Purple', 'Kraft', '35.99', '48in. x 200ft.', '1 Roll', 'Images/craftPurple.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Blue', 'Kraft', '35.99', '48in. x 200ft.', '1 Roll', 'Images/craftBlue.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Pink', 'Kraft', '35.99', '48in. x 200ft.', '1 Roll', 'Images/craftPink.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('White', 'Origami', '6.99', '3in. x 3in.', '100 Sheets', 'Images/origamiWhite.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Yellow', 'Origami', '7.99', '3in. x 3in.', '100 Sheets', 'Images/origamiYellow.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Red', 'Origami', '7.99', '3in. x 3in.', '100 Sheets', 'Images/origamiRed.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Purple', 'Origami', '7.99', '3in. x 3in.', '100 Sheets', 'Images/origamiPurple.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Blue', 'Origami', '7.99', '3in. x 3in.', '100 Sheets', 'Images/origamiBlue.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('Pink', 'Origami', '7.99', '3in. x 3in.', '100 Sheets', 'Images/origamiPink.png');";

$sql .= "INSERT INTO products (color, product_type, product_price, product_size, product_quantity, image_path)
VALUES ('White', 'Special Copy', '39.99', '8.5in. x 11in.', '5000 Sheets', 'Images/PaperCASE.png');";

$conn->multi_query($sql);

$conn->close();
?>