<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>

<?php
        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "thapadb";


        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);


        if(isset($_POST['login'])){
            $lname = $_POST['lname'];
            $lpass = $_POST['lpass'];

            $searchVal = "SELECT * FROM `thapatb` WHERE `uname` = '$lname' AND `pass` = '$lpass'";

            $res = mysqli_query($conn, $searchVal);

            $emailCount = mysqli_num_rows($res);

            if($emailCount){
                echo   'success';  
                $_SESSION['lname'] = $lname;
                $_SESSION['lpass'] = $lpass;
                header("Location: main.php");
            }else{
                echo 'error';
            }


        }

        ?>

<div style="    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 89vh;">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="lname" id="lname" placeholder="enter your  name for login">
    <input type="text" name="lpass" id="lpass" placeholder="enter your  name for password">
    <input type="submit" value="Login" class="Login" name="login">
    </form>
</div>
<script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href)
    }
</script>
</body>

</html>