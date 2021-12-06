<?php
header("Location: productPage.php");
session_start();
$_SESSION['product_id'] = $_GET['product_id'];

?>