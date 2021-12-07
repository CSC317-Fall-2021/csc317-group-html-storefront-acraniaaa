<?php

    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $USERNAME = $_GET['username'];
        $PASSWORD = $_GET['password'];

        $check_username = mysqli_query($conn, "SELECT username FROM loginInfo where username = '$USERNAME' ");
        $check_password = mysqli_query($conn, "SELECT pass_word FROM loginInfo where username = '$USERNAME' ");
        $sql= "SELECT username FROM userInfo where username = '$USERNAME'" ;

            if(mysqli_num_rows($check_username) > 0) {

                $sql = "SELECT pass_word FROM loginInfo where username = '$USERNAME' ";
                $inpPass = $conn -> query($sql);
                $row = $inpPass -> fetch_assoc();

                    if(strcmp(strval($PASSWORD) == $row['pass_word'])) {

                        echo "successfully logged in";
                        header("Location: home.php");

                    }

                    echo $USERNAME;
                    echo $PASSWORD;
                    echo $row['username'];
                    echo $row['pass_word'];

            } 
    $conn->close();
?>