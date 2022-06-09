<?php
session_start();

if (!isset( $_SESSION['lname'])) {
    echo   'You are logged out'  ;
    header('Location: login.php');

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>

<body>
    <h1>Hello <?php

        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "thapadb";


        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        echo   $_SESSION['lname'] ;


        ?></h1>

        <br>
        <div>
            <h2 style="cursor: pointer;"><a href="logout.php">LogOut Now</a></h2>
        </div>
</body>

</html>