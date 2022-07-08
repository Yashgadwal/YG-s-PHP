<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>total</title>
</head>

<body>
    <?php
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "totaldb";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $price = $_POST['price'];
        $sql = "INSERT INTO `totaltb` (`prices`) VALUES ($price)";
        $result = mysqli_query($conn, $sql);
    }

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="number" name="price" id="price">
        <input type="submit" value="Submit">
    </form>


    <?php
    
    $sql = "SELECT SUM(prices) AS TotalItemsOrdered FROM totaltb";

    $result1 = mysqli_query($conn, $sql);


    while ($row = mysqli_fetch_array($result1)) {
        echo $row['TotalItemsOrdered'];
    }


    ?>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>
</body>

</html>