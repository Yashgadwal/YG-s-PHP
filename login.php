<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <link rel="stylesheet" href="CSS/utilities.css">
    <title>Salon Hub</title>
</head>

<body>

    <div class="heading flex j-center a-center mt-4">
        <h1>Login</h1>
    </div>
    <div class="cont flex j-center a-center mt-5">

        <form action="" method="post" class="form">
            <img src="images/admin.jpg" alt="admin" class="admin"><br>
            <input class=" inputBox" type="text" name="name" id="name" class="bold" required placeholder="Enter Name"><br>
            <input class=" inputBox" type="text" name="pass" id="pass" class="bold" required placeholder="Enter Password"><br>
            <input class="ml-9 j-center a-center bold" name="submit" type="submit" value="submit" id="submit">
            <div id="error flex j-center a-center bold">

            </div>
        </form>
        <?php
        include "particals/_dbConn.php";
        $sql = "SELECT * FROM `salontb`";
        $run = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_array($run)) {
            $name = $row['name'];
            $pass = $row['pass'];
            if ($name == $_POST['name']) {
                if ($pass == $_POST['pass']) {
                    header("Location: welcome.php");
                } else {
                    echo 'Error';
                }
            }
        }

        ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">

    </script>
</body>

</html>