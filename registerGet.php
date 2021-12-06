<?php
    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $FIRSTNAME = $_GET['FirstName'];
        $LASTNAME = $_GET['LastName'];

        $USERNAME = $_GET['user'];
        $EMAIL = $_GET['email'];

        $USERNAME = $_GET['username'];
        $PASSWORD = $_GET['Password'];

        $sql = "INSERT INTO userinfo (first_name, last_name, username, email, pass_word)
                VALUES ('$FIRSTNAME', '$LASTNAME', '$USERNAME', '$EMAIL', '$PASSWORD');";

                if ($conn->query($sql) === TRUE) {
                    echo "Info received";
                  } else {
                    echo "Error creating database: " . $conn->error;
                  }
    
    $conn->close();
?>