<?php

if (isset($_SESSION["userName"])) {

    $userID = $_SESSION["userID"];
    $userName = $_SESSION["userName"];
    $userFirstName = $_SESSION["userFirstName"];
    $userLastName = $_SESSION["userLastName"];
    $userEmail = $_SESSION["userEmail"];
    $userAddress = $_SESSION["userAddress"];
    $userBio = $_SESSION["userBio"];
    $userLoginTime = $_SESSION["userLoginTime"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $userImageData = fetchUserImageData($conn, $userID);
    $activeStatus = emailVerificationChk($conn, $userID);
} else {
    echo (
    "<section id='errAccessDenied'>
    <div class='container'>
        <div class='user-input-card border border-primary border-2 mx-auto hidden'>
        <h1 class='moonffee text-center fw-bold pb-2'>Hey!</h1>
        <h4 class='text-center fw-bold'>You need to first login or register to see your profile page!</h4>
        <hr>
            <div class='text-center'>
                <a href='../user_login.php' class='btn btn-primary fw-bold fs-4 mx-2 my-2'>Login</a>
                <a href='../user_sign_in.php' class='btn btn-primary fw-bold fs-4 mx-2'>Sign in</a>
            </div>
        </div>
        </div>
    </section>");
    include_once 'footer.php';
    exit();
}
