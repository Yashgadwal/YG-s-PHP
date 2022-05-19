<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        h1{
            margin-top: 10px;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "appdb";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


//Getting information
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $rollno = $_POST['rollno'];

    
    $sql = "INSERT INTO `apptb` (`name`, `class`, `rollno`) VALUES ('$name', '$class', '$rollno')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Succssfully inserted</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>' ;
    }
  // Submit these to a database
}
?>

    <?php
    include 'nav.php';
    ?>
    <h1>
        Fill Your Details
    </h1>
    <div class="container mt-5">
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input placeholder="Enter Your Name" type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Class</label>
                <input placeholder="Enter Your Class" name="class" type="text" class="form-control" id="classs">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">RollNo</label>
                <input placeholder="Enter Your RollNo " name="rollno" type="text" class="form-control" id="RollNo">
            </div>

            <button type="submit" id="btn" class="btn btn-primary">Submit</button>
        </form>
    </div>


<div class="container">
<?php

$display = "SELECT * FROM `apptb`";
$result = mysqli_query($conn, $display);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
$no = 1;
if($num> 0){

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo   "$no) "  ;
        echo 'hello '.
        "<b>".$row['name'] ."</b>". " you are from ".
        "<b>".$row['class']."</b>". " and your roll no is ".
        "<b>".$row['rollno']."</b>";
        $no++;
        echo "<br>";
    }
}

?>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        let a = document.getElementById(name && classs && rollNo);
        let b = document.getElementById(btn);
        if (name && classs && rollNo ==null) {
            btn.style.display = 'none';
        } else {
            btn.style.display = 'block';
        }
    </script>
</body>

</html>