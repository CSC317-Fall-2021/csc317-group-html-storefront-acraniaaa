<?php

    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $USERNAME = $_GET['username'];
        $PASSWORD = $_GET['password'];

        $check_username = mysqli_query($conn, "SELECT username FROM userInfo where loginInfo = '$USERNAME' ");

            if(mysqli_num_rows($check_username) > 0) {

                $check_password = mysqli_query($conn, "SELECT pass_word FROM loginInfo where username = '$USERNAME' ");

                    if(strcmp(strval($PASSWORD) == strval($check_password))) {

                        echo "successfully logged in";
                        header("Location: home.php");

                    }
            } 
    $conn->close();
?>