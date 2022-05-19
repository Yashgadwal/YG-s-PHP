<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>E-Commerce</title>
</head>

<body>


    <!-- 
    =================================================================
    NavBar Start
    =================================================================
        -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky" style="position:fixed; top:0; width:100%; z-index: 2; ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">YG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
            </div>
        </div>
    </nav>
    <!-- 
    =================================================================
    NavBar End
    =================================================================
        -->



    <section class="display wrap1" style="display: flex; flex-wrap:wrap; margin-top:4rem; ">
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
        ?>
            <section class="pro mt-4 ">
                <div class="container" style="margin-right:3rem ;">
                    <div class="card " style="width: 18rem;">
                        <div class="dd">
                            <img style="transition:1s all ;" id="scale" src="<?php echo   $row['imagename']; ?>" height="170rem" width="18rem" class="card-img-top scale" alt="product">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo   $row['productname']; ?></h5>
                            <p class="card-text"><?php echo   $row['productinfo']; ?></p>
                            <p class="card-text"><b> ₹<?php echo   $row['productprice']; ?></b></p>
                        </div>
                    </div><br>
                </div>
            </section>
        <?php
        }


        ?>
    </section>


    <footer>
        <p class="fot">
            copyright 2022 YG
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>