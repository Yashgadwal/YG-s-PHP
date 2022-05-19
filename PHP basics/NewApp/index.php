<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "newapp";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);



?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cardtitle = $_POST['cardtitle'];    //Making Two Variables for Getting INPUT
    $carddesc = $_POST['carddesc']; //Making Two Variables for Getting INPUT
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>App</title>
</head>

<body>
    <div class="card" style="width: 18rem;">
        <img src="https://source.unsplash.com/random" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" name="card-title">$cardtitle</h5>
            <p class="card-text">$carddesc</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>