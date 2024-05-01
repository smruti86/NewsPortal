<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- <style>
        .wholecontainer {
            background-color: rgb(29, 3, 54);
        }
        nav {
            background-color: blueviolet;
        }
        .loginnav {
            border-radius: 2rem;
        }
        .loginnav:hover {
            background-color: rgba(255, 255, 255, 0.2); 
            border-color: white; 
            color: white;
            border-radius: 2rem;
        }
    </style> -->
</head>
<body class="wholecontainer">
    <?php include_once "include/navbar.php"; ?>
    <!-- <nav class="navbar navbar-expand-lg navbar-dark sticky-top p-1">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="NewsHive" height="20">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="navbar-brand mx-3 fs-6" href="#"><i class="bi bi-house-fill mx-2"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="navbar-brand mx-3 fs-6" href="#"><i class="bi bi-newspaper mx-2"></i>News</a>
                </li>
                <li class="nav-item active">
                    <a class="navbar-brand mx-3 fs-6" href="#"><i class="bi bi-grid-fill mx-2"></i>Category</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand mx-3 fs-6 px-4 btn btn-outline-light loginnav" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand mx-3 fs-6 px-4 btn btn-outline-light loginnav" href="register.php">Register</a>
                </li>
        </ul>
        </div>
    </nav> -->

    <?php
    include_once "carosuel.php";
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>