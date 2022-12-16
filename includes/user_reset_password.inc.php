<?php

include_once 'dbh.inc.php';
include_once 'functions.inc.php';

if (isset($_POST["resetPwd"])) {
    $linkToken = isset($_COOKIE["linkToken"]) ? $_COOKIE["linkToken"] : "";

    $result = mysqli_query($conn, "SELECT token FROM users WHERE token = '$linkToken';");
    $token = mysqli_fetch_column($result);

    if ($token === $linkToken) {
        $newPwd = mysqli_real_escape_string($conn, $_POST["newPwd"]);
        $newPwdRepeat = mysqli_real_escape_string($conn, $_POST["newPwdRepeat"]);

        if (userPwdValidate($newPwd) !== false) exit(header("location: ../user_reset_password.php?error=pwdValidate"));

        if (pwdMatch($newPwd, $newPwdRepeat) !== false) exit(header("location: ../user_reset_password.php?error=newPwdMatch"));

        $newHashedPWD = password_hash($newPwd, PASSWORD_DEFAULT);

        mysqli_query($conn, "UPDATE users SET userPWD = '$newHashedPWD', token = NULL WHERE token = '$token';")
            or die(header("location: ../user_login.php?error=stmtFailed"));

        exit(header("location: ../user_login.php?success=pwdUpdated"));
    } else exit(header("location: ../user_login.php?error=invalidToken"));
}
