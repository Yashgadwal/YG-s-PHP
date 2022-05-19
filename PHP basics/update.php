<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "finaldb";
// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Updating Start 
$update = "UPDATE `finaltb` SET `name` = '<b>''Raggav''</b>' WHERE `finaltb`.`sno` = 2";
$updateque = mysqli_query($conn,$update);
if ($updateque){
    echo "Succfully updated";
}
// Updating End 


$sql = "SELECT * FROM `finaltb`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
$no = 1;

// Display the rows returned by the sql query
if($num> 0){

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo
        $no.' '. 
        $row['name'] .'  '.
        $row['password'];
        echo "<br>";
        $no++;
    }

//For seeing number of effected Rows
$aff=mysqli_affected_rows ($conn); 
echo "<br>Number of affected rows: $aff <br>";
}

?>

