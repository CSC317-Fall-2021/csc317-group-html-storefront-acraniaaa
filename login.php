<?php

    header("Location: index.html");

    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $USERNAME = $_GET['username'];
        $PASSWORD = $_GET['password'];

        $sql = "INSERT INTO loginInfo (username, pass_word)
                VALUES ('$USERNAME', '$PASSWORD');";

                if ($conn->query($sql) === TRUE) {
                    echo "Info received";
                  } else {
                    echo "Error creating database: " . $conn->error;
                  }
    
    $conn->close();
?>