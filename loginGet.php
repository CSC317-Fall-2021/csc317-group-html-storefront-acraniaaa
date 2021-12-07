<?php

    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $USERNAME = $_GET['username'];
        $PASSWORD = $_GET['password'];

        session_start();
        $_SESSION['loginStatus'] = 0;

            $sql =  "SELECT username FROM loginInfo where username = '$USERNAME' ";
            $RESULT = $conn -> query($sql);
            $row1 = $RESULT -> fetch_assoc();

            if($RESULT->num_rows > 0) {

                $sql = "SELECT username,pass_word FROM loginInfo where username = '$USERNAME' ";
                $inpPass = $conn -> query($sql);
                $row = $inpPass -> fetch_assoc();

                    if(strcmp(strval($PASSWORD), strval($row['pass_word'])) == 0) {

                        echo "successfully logged in";
                        header("Location: home.php");
                        $_SESSION['loginStatus'] = 1;

                    }

            } 

    $conn->close();
?>