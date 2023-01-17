<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kider - Preschool Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="./asset/png" href="./asset/laundrycle.png" />

    <!-- Favicon -->
    <link href="./favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap_web.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style_web.css" rel="stylesheet">
    <style>
        .text-primary {
         color: #89CFFD!important;
        }
        .btn-primary {
        color: #89CFFD;
        background-color: #89CFFD;
        border-color: #89CFFD;
    }
    .navbar .navbar-nav .nav-link:hover, .navbar .navbar-nav .nav-link.active {
    color: #89CFFD ;
        }
    </style>
</head>

<body>

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="home.php" class="navbar-brand">
            <h1 class="m-0 text-primary"><img src="./asset/laundry.jpg" width="100px" height="65px;"> </i>Cleaning Laundry</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                    <a class="nav-item nav-link active" href="home.php">Home</a>
                </li>

                <li class = "nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Costumer</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="view_costumer.php" class="dropdown-item">View Costumer</a>
                            <a href="add_costumer.php" class="dropdown-item">Add Costumer</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Order</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="view_order.php" class="dropdown-item">View Order</a>
                            <a href="add_order.php" class="dropdown-item">Add Order</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Service</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="view_service.php" class="dropdown-item">View Service</a>
                            <a href="add_service.php" class="dropdown-item">Add Service</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Employee</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="view_employee.php" class="dropdown-item">View Employee</a>

                        <?php
                        if($_SESSION["role"]=='admin' or $_SESSION["role"]=='owner'){
                        ?>
                        <a href ="add_employee.php" class="dropdown-item">Add Employee</a>
                        <?php
                        }else{

                        }
                        ?>
                    </div>
                </li>
            </ul>

            <li class="nav-item">
            <a href="logout.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a>
                <!-- <a class="nav-link" href="logout.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a> -->
            </div>
        </nav>
        