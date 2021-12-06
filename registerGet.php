<?php
    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $FIRSTNAME = $_GET['FirstName'];
        $LASTNAME = $_GET['LastName'];

        $USERNAME = $_GET['user'];
        $EMAIL = $_GET['email'];

        $USERNAME = $_GET['user'];
        $PASSWORD = $_GET['Password'];

        $sql = "SELECT username FROM userInfo WHERE username='{$USERNAME}'";
        $result = mysqli_query($con,$sql) or die("Username Error") ;
              if (mysqli_num_rows($result) > 0) {
                echo "Username already exists";
              }

        $sql = "SELECT email FROM userInfo WHERE email='{$EMAIL}'";
        $result = mysqli_query($con,$sql) or die("Email  Error") ;
              if (mysqli_num_rows($result) > 0) {
                echo "Username already exists";
              }

        $sql = "INSERT INTO userInfo (first_name, last_name, username, email, pass_word)
                VALUES ('$FIRSTNAME', '$LASTNAME', '$USERNAME', '$EMAIL', '$PASSWORD');";

                if ($conn->query($sql) === TRUE) {
                    echo "Info received";
                  } else {
                    echo "Error creating database: " . $conn->error;
                  }

        $sql = "INSERT INTO loginInfo (username, pass_word)
                VALUES ('$USERNAME', '$PASSWORD');";

                if ($conn->query($sql) === TRUE) {
                    echo "Info received";
                  } else {
                    echo "Error creating database: " . $conn->error;
                  }
    
    $conn->close();
?>