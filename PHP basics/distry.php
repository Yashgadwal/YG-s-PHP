<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "finaldb";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Die if connection was not successful

$sql = 'SELECT * FROM `finaltb` ORDER BY `sno` ASC';
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
// Display the rows returned by the sql query
if ($num > 0) {

    // We can fetch in a better way using the while loop
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $row['sno'] .  ". Hello " . $row['name'] . " Welcome to " . $row['password'];
        echo "<br>";
    }
}
?>