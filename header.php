<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Rubik:wght@400;600&display=swap" rel="stylesheet" />
    <!-- Custom css -->
    <link rel="stylesheet" href="./css/input.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap 5.2.2 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <!-- Custom js -->
    <script src="./js/onScrollAnim.js" defer></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <!-- Font Awesome icons -->
    <script src="https://kit.fontawesome.com/ec21d7f44f.js" crossorigin="anonymous" defer></script>
    <title>Moonffee Coffee Shop</title>
</head>

<body>
    <header id="header">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg text-center">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="index.php">
                    <img src="/imgs/moonffee_logo.png" alt="Logo" width="40" class="d-inline-block mb-2">
                    Moonffee
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link nav-link-borderAnim active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-borderAnim" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-borderAnim" href="#">Contact</a>
                        </li>
                        <!-- Dropdown link -->
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link-borderAnim dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Coffee</a></li>
                                <li><a class="dropdown-item" href="#">Brands</a></li>
                                <li><a class="dropdown-item" href="#">Supplies</a></li>
                                <li><a class="dropdown-item" href="#">Addons</a></li>
                                <li><a class="dropdown-item" href="#">Cups & Mugs</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Check our shop</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Search bar -->
                    <form class="d-flex mx-auto" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <!-- Sign in / Login -->
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                        <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<li class='nav-item'>
                                        <a class='nav-link nav-link-borderAnim' href='#'>Profile</a>
                                    </li>";
                                echo "<li class='nav-item'>
                                        <a class='nav-link nav-link-borderAnim' href='includes/logout.inc.php'>Log Out</a>
                                    </li>";
                            } 
                            else {
                                echo "<li class='nav-item'>
                                        <a class='nav-link nav-link-borderAnim' href='login.php'>Log In</a>
                                    </li>";
                                echo
                                    "<li class='nav-item'>
                                        <a class='nav-link nav-link-borderAnim' href='signup.php'>Sign In</a>
                                    </li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>