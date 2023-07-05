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


















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data site </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h3>welcome to my site </h3>
        <p>enter you details to confirm your participation in database </p>



        <form action="index.php" method="post">
            <label for="name">name:-</label>
            <input type="text" name="name" id="name" placeholder="enter your name"><br>

            <label for="age">age:-</label>
            <input type="text" name="age" id="age" placeholder="enter your age "><br>

            <label for="gender">gender:-</label>
            <input type="text" name="gender" id="gender" placeholder="enter your gender"><br>

            <label for="email">email:-</label>
            <input type="email" name="email" id="email" placeholder="enter your email"><br>

            <label for="phone">phone:-</label>
            <input type="phone" name="phone" id="phone" placeholder="phone no.  must be 10 digits"><br>

            <label for="more">more details</label><br>
            <textarea name="more" id="more" cols="30" rows="10" placeholder="other info"></textarea><br>

            <img class="bg" src="3.jpeg" alt=""><br>
            <button class="btn">submit</button>
            <button class="btn">reset</button>
        </form>


    </div>
    <script src="index.js"></script>



</body>

</html>