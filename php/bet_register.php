<?php
include 'db/db_conn.inc.php';

if (isset($_POST['name'], $_POST['username'], $_POST['email'], $_POST['phone'], $_POST['pin'])){

    $name = mysqli_real_escape_string($conn, htmlentities($_POST['name']));
    $username = mysqli_real_escape_string($conn, htmlentities($_POST['username']));
    $email = mysqli_real_escape_string($conn, htmlentities($_POST['email']));
    $phone = mysqli_real_escape_string($conn, htmlentities($_POST['phone']));
    $pin = mysqli_real_escape_string($conn, htmlentities($_POST['pin']));
    $cpin = mysqli_real_escape_string($conn, htmlentities($_POST['cpin']));

    if (!empty($name && $username && $email && $phone && $pin)){

        if ($pin === $cpin){ //chech if the PIN matches

            //register new members
            $select = mysqli_query($conn, "SELECT `username`, `email`, `phone` FROM `bet_members` WHERE `username`='$username' OR `email`='$email' OR `phone`='$phone'");
            $row = mysqli_fetch_assoc($select);
            if($row > 0){
                if ($username != $row['username']){ //check if user does not exist
                    if ($email != $row['email']){ //check if email does not exist
                        if ($phone != $row['phone']){ //check if phone number does not exist

                        }else{
                            echo $row['phone'].' is already in use';
                        }
                    }else{
                        echo $row['email'].' already exists';
                    }
                }else{
                    echo $row['username'].' already exists';
                }
            }

            //register user if no details are found in the database
            $insert = mysqli_query($conn, "INSERT INTO bet_members (`phone`,`name`,`username`,`email`,`pin`) VALUES ('$phone','$name','$username','$email','$pin')");

            if ($insert){
                echo 'Congratulations! '.$username.' has been registered successfully';
            }else {
                echo 'Registration failed.';
            }

        }else{
            echo 'PIN does not match';
        }
    }else {
        echo "The fields should not be empty";
    }
}
mysqli_close($conn);