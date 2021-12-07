<?php

    header("Location: index.html");

    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $USERNAME = $_GET['username'];
        $PASSWORD = $_GET['password'];

        $check_username = mysqli_query($conn, "SELECT username FROM userInfo where username = '$USERNAME' ");

    
    $conn->close();
?>