<?php
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "yg1";
    
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password,$database);
    
    // Die if connection was not successful
    // if (!$conn){
    //     die("Sorry we failed to connect: ". mysqli_connect_error());
    // }
    // else{
    //     echo "Connection was successful";
    // }
    
    #   INSERT DATA IN DB 
    $sql = "INSERT INTO `ygtb` (`sno`, `name`, `dest`) VALUES (4,'rishabh', 'south africa')";
    mysqli_query($conn, $sql);

?>