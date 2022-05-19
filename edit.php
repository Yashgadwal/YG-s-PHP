<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Checking POST Method
    $changeHere = $_POST['NewChange'];    //Making Two Variables for Getting INPUT
    $changeValue = $_POST['NewValue']; //Making Two Variables for Getting INPUT
    $indexNo = $_POST['IndexNo']; //Making Two Variables for Getting INPUT


    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "admindb";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful


    // UPDATE `admintb` SET `imagename` = '../image/14.jpg' WHERE `admintb`.`sno` = 14;

    $sql = "UPDATE `admintb` SET `$changeHere` = '$changeValue' WHERE `admintb`.`sno` = $indexNo";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo 'product Updated successfully';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@1,700&display=swap');

        table,
        th,
        td {
            border: 1px solid black;
        }

        th{
            background:#ffad6d;
            font-family: 'PT Serif', serif;
        }
    </style>

</head>

<body>

    <form action="edit.php" method="post">
        <input type="text" name="IndexNo" id="IndexNo" placeholder="Enter IndexNo"><br>
        <input type="text" name="NewChange" id="NewChange" placeholder="What you want to Change"><br>
        <input type="text" name="NewValue" id="NewValue" placeholder="New Value"><br>
        <input type="submit" value="submit"><br>
    </form>

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
                    <th style="background-color:#ffad6d;">sno</th>
                    <th style="background-color:#ffad6d;">productname</th>
                    <th style="background-color:#ffad6d;">imagename</th>
                    <th style="background-color:#ffad6d;">productinfo</th>
                </tr>
            </thead>


            <tbody>
                <?php
                $sql = "SELECT * FROM `admintb`";
                $result = mysqli_query($conn, $sql);
                $sno = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    // $sno = $sno + 1;
                    echo "<tr>
            <th scope='row'>" . $row['sno'] . "</th>
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