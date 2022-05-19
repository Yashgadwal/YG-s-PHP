<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Checking POST Method
    $producName = $_POST['producName'];    //Making Two Variables for Getting INPUT
    $productPrice = $_POST['productPrice']; //Making Two Variables for Getting INPUT
    $productInfo = $_POST['productInfo']; //Making Two Variables for Getting INPUT
    $image = $_POST['image']; //Making Two Variables for Getting INPUT


    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "admindb";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful


    $sql = "INSERT INTO `admintb` (`productname`, `productprice`, `imagename`, `productinfo`) VALUES ('$producName', '$productPrice', '$image', '$productInfo')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'product inserted successfully';
    }
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <title>Admin</title>
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@1,700&display=swap');

        table,
        th,
        td {
            border: 1px solid black;
        }

        th {
            background-color: #ffad6d;
            /* font-weight: bolder; */
            font-family: 'PT Serif', serif;
        }
    </style>
</head>

<body>

    <form action="admin.php" method="post" enctype="multipart/form">
        <input type="text" name="producName" placeholder="Enter The Title of product" id="title"> <br>
        <input type="text" name="productPrice" placeholder="Enter The price" id="price"> <br>
        <input type="text" name="productInfo" placeholder="Enter the information of product" id="information"> <br>
        <input type="text" name="image" placeholder="Enter The image name" id="image"> <br>
        <input type="submit" value="SubmitTheData" id="SubmitTheData">
    </form> <br>

    <!-- Display Data -->
    <?php
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "admindb";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql1 = "SELECT * FROM `admintb`";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result);
    while ($row = mysqli_fetch_assoc($result)) {
        // echo   $row['sno']  ;
    ?>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th>sno</th>
                    <th>productname</th>
                    <th>imagename</th>
                    <th>productinfo</th>
                </tr>
            </thead>


            <tbody>
                <?php
                $sql = "SELECT * FROM `admintb`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
            <td scope='row'>" . $row['sno'] . "</td>
            <td>" . $row['productname'] . "</td>
            <td>" . $row['imagename'] . "</td>
            <td>" . $row['productinfo'] . "</td>
          </tr>
          
          ";
                }
                ?>


            </tbody>
        </table>



    <?php
    }

    ?>



    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();

        });
    </script>



</body>

</html>