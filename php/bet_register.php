<?php
include 'db/db_conn.inc.php';

if (isset($_POST['name'], $_POST['username'], $_POST['email'], $_POST['phone'], $_POST['pin'], $_POST['cpin'])){

    $name = mysqli_real_escape_string($conn, htmlentities($_POST['name']));
    $username = mysqli_real_escape_string($conn, htmlentities($_POST['username']));
    $email = mysqli_real_escape_string($conn, htmlentities($_POST['email']));
    $phone = mysqli_real_escape_string($conn, htmlentities($_POST['phone']));
    $pin = mysqli_real_escape_string($conn, htmlentities($_POST['pin']));
    $cpin = mysqli_real_escape_string($conn, htmlentities($_POST['cpin']));

    if (!empty($name && $username && $email && $phone && $pin && $cpin)){

        if ($pin === $cpin){ //chech if the PIN matches

            //register new members
            $select = mysqli_query($conn, "SELECT `username`, `email`, `phone` FROM `bet_members` WHERE `username`='$username' OR `email`='$email' OR `phone`='$phone'");
            $row = mysqli_fetch_assoc($select);
            if($row > 0){

                if ($username === $row['username']){
                    echo $row['username'].' already exists';
                }else{
                    if ($email === $row['email']){
                        echo $row['email'].' already exists';
                    }else{
                        if ($phone === $row['phone']){
                            echo $row['phone'].' is already in use';
                        }else{

                        }
                    }
                }
            }else{
                //register user if no details are found in the database
                $insert = mysqli_query($conn, "INSERT INTO bet_members (`phone`,`name`,`username`,`email`,`pin`) VALUES ('$phone','$name','$username','$email','$pin')");

                if ($insert){
                    echo "<div class='alert alert-success'><h6 class='text-success text-center'>You have successfully registered.</h6></div>";
                }else {
                    echo "<div class='alert alert-danger'><h6 class='text-danger text-center'>Registration failed.</h6></div>";
                }
            }
        }else{
            echo "<div class='alert alert-danger'><h6 class='text-danger text-center'>PIN does not match</h6></div>";
        }
    }else {
        echo "<div class='alert alert-danger'><h6 class='text-danger text-center'>All fields are required.</h6></div>";
    }
}
mysqli_close($conn);
?>