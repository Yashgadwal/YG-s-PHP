<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="imgname" id="imgName" value="">
        <input type="submit" value="submit" id="btn">
    </form>
    <?php
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "padamdb";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);


    $fileName = $_FILES['imgname']['name'];
    $tempname = $_FILES['imgname']['tmp_name'];
    $folder = "image/" . '../image/1.jpg' . $fileName;
    // echo $folder;
    echo $fileName;
    move_uploaded_file($tempname, $folder);

    $sql = "INSERT INTO `padamtb` (`sno`, `imgname`, `price`) VALUES (NULL, 'image/$fileName', '')";
    mysqli_query($conn, $sql);



    ?>
    <div id="place"></div>
    <script>
        $('#btn').click(function() {
            document.getElementById("place").innerHTML = "successfully Uploaded";
        })


        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href)
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>