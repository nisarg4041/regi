<?php

if (isset($_POST['name']))
 {


 
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this database failed due to " . mysqli_connect_error());

    }

    

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $more = $_POST['more'];



    $sql = "INSERT INTO `profile`.`profile` ( `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`) 
    VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$more');";


    if ($con->query($sql) == true) {
        echo "successfully inserted";

    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>











