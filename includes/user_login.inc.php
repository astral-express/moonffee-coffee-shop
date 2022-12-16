<?php

if (isset($_POST["submitLogin"])) {
    $userName_userEmail = $_POST["userName-userEmail"];
    $userPwd = $_POST["userPwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $userExists = userExists($conn, $userName_userEmail, $userName_userEmail);

    if ($userExists === false) exit(header("location: ../user_login.php?error=incorrectLoginUsernameOrEmail"));

    $pwdHashed = $userExists["userPWD"];
    $checkPwd = password_verify($userPwd, $pwdHashed);

    if ($checkPwd === false) exit(header("location: ../user_login.php?error=incorrectLoginPwd"));
    else {
        session_start();
        $_SESSION["userID"] = $userExists["userID"];
        $_SESSION["userFirstName"] = $userExists["userFirstName"];
        $_SESSION["userLastName"] = $userExists["userLastName"];
        $_SESSION["userName"] = $userExists["userName"];
        $_SESSION["userEmail"] = $userExists["userEmail"];
        $_SESSION["userAddress"] = $userExists["userAddress"];
        $_SESSION["userBio"] = $userExists["userBio"];
        $_SESSION["userLoginTime"] = time();
        exit(header("location: ../index.php"));
    }
} else {
    exit(header("location: ../user_login.php"));
}
