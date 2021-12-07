<?php

    $conn = new mysqli('localhost', 'user', 'password', 'main');

        $USERNAME = $_GET['username'];
        $PASSWORD = $_GET['password'];

            $sql =  "SELECT username FROM loginInfo where username = '$USERNAME' ";
            $RESULT = $conn -> query($sql);
            $row1 = $RESULT -> fetch_assoc();

            if($RESULT->num_rows > 0) {

                $sql = "SELECT pass_word FROM loginInfo where username = '$USERNAME' ";
                $inpPass = $conn -> query($sql);
                $row = $inpPass -> fetch_assoc();

                    if(strcmp(strval($PASSWORD), strval($row['pass_word']))) {

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