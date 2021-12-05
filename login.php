<?php
    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $USERNAME = $_GET['username'];
        $PASSWORD = $_GET['password'];

        $sql = "INSERT INTO loginInfo (username, pass_word)
                VALUES ($USERNAME, $PASSWORD);";
    
    $conn->close();
?>