<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (invalidUID($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    // if (pwdValidate($pwd) !== false) {
    //     header("location: ../signup.php?error=pwdvalidate");
    //     exit();
    // }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=pwdmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
} else {
    header("location: ../signup.php");
    exit();
}
