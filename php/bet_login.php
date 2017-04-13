<?php

include 'db/db_conn.inc.php';

if (isset($_POST['username'], $_POST['pin'])){
    $username = mysqli_real_escape_string($conn, htmlentities($_POST['username']));
    $pin = mysqli_real_escape_string($conn, htmlentities($_POST['pin']));

    if (!empty($username && $pin)){

        $select = mysqli_query($conn, "SELECT `username`, `email`, `pin` FROM `bet_members` WHERE `username`='$username' OR `email`='$username'");

        if ($select == true){
            $row = mysqli_fetch_assoc($select);

            if ($row > 0){
                if ($username == $row['username'] || $username == $row['email']){ //check for correct username or email
                    if ($pin == $row['pin']){ //check for correct PIN
                        //start session
                        session_start();
                        $_SESSION['name'] = 'registered_member';
                        $_SESSION['username'] = $row['username'] || $row['email'];
                        header("Location: ../pages/bet_slip.php");
                    }else{
                        header("Location:../index.php");
                        echo 'Wrong PIN';
                    }
                }else{
                    header("Location:../index.php");
                    echo 'Username not found';
                }
            }
        }else{
            header("Location:../index.php");
            echo 'Could not find the user';
        }
    }else{
        header("Location:../index.php");
    }
}
mysqli_close($conn);