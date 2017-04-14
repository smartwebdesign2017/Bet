<?php

include 'db/db_conn.inc.php';

if (isset($_POST['username'], $_POST['pin'])){
    $username = mysqli_real_escape_string($conn, htmlentities($_POST['username']));
    $pin = mysqli_real_escape_string($conn, htmlentities($_POST['pin']));

    if (!empty($username)){
        if (!empty($pin)){
            $select = mysqli_query($conn, "SELECT `username`, `email`, `phone`, `pin` 
                                            FROM `bet_members` 
                                            WHERE `username`='$username' OR `email`='$username' OR `phone`='$username'");

            if ($select == true){
                $row = mysqli_fetch_assoc($select);

                if ($row > 0){
                    if ($username == $row['username'] || $username == $row['email'] || $username == $row['phone']){ //check for correct username or email
                        if ($pin == $row['pin']){ //check for correct PIN
                            //start session
                            //echo "<div class='alert alert-success'><div class='text-success'>Successful Login.</div></div>";
                            /*echo "Successful";
                            session_start();
                            $_SESSION['name'] = 'registered_member';
                            $_SESSION['username'] = $row['username'] || $row['email'];*/
                            header("Location: ../pages/bet_slip.php");
                        }else{
                            echo "<div class='alert alert-danger'><h6 class='text-danger text-center'>Wrong PIN.</h6></div>";
                            //header("Location:../index.php");
                        }
                    }elseif ($username == ''){
                        echo "<div class='alert alert-danger'><h6 class='text-danger text-center'>Enter your username to login</h6></div>";
                    }else {
                        echo "<div class='alert alert-danger'><h6 class='text-danger text-center'>Wrong Username.</h6></div>";
                        //header("Location:../index.php");
                    }
                }
            }else{
                echo "<div class='alert alert-danger'><h6 class='text-danger text-center'>Error in finding your username</h6></div>";
                //header("Location:../index.php");
            }
        }else{
            echo "<div class='alert alert-danger'><h6 class='text-danger text-center'>Please Enter your PIN.</h6></div>";
        }
    }else{
        echo "<div class='alert alert-danger'><h6 class='text-danger text-center'>Please Enter your Username.</h6></div>";
        //header("Location:../index.php");
    }
}
mysqli_close($conn);
?>