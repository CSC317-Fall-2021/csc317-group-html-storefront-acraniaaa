<?php
    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $FIRSTNAME = $_GET['FirstName'];
        $LASTNAME = $_GET['LastName'];

        $USERNAME = $_GET['user'];
        $EMAIL = $_GET['email'];

        $USERNAME = $_GET['user'];
        $PASSWORD = $_GET['Password'];

        $check_username = mysqli_query($conn, "SELECT username FROM userInfo where username = '$USERNAME' ");
              if(mysqli_num_rows($check_username) > 0){
                  echo('Username Already exists');
              }
             
        $check_email = mysqli_query($conn, "SELECT email FROM userInfo where email = '$EMAIL' ");
              if(mysqli_num_rows($check_email) > 0){
                  echo('Email Already exists');
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