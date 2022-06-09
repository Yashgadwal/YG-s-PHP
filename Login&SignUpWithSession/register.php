<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
</head>

<body>
    <div style="    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 89vh;">

        <?php
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "thapadb";


        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Uname = $_POST['Uname'];
            $Password = $_POST['Password'];

            $sql = "INSERT INTO `thapatb` (`uname`, `pass`) VALUES ('$Uname', '$Password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo   'Inserted successfully';
            } else {
                echo   'due to some technical error registration unsuccessful try again';
            }
        }

        ?>
        <form action="Login.php" method="post">

            <input type="text" name="Uname" id="Uname" placeholder="Enter you username">
            <input type="text" name="Password" id="Password" placeholder="Enter your password">
            <input type="submit" value="Submit" name="Register">
    </div>


    </form>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>
</body>

</html>