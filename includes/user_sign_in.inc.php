<?php

if (isset($_POST["submitSignIn"])) {
    $userFirstName = $_POST["firstName"];
    $userLastName = $_POST["lastName"];
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPwd = $_POST["userPwd"];
    $userPwdRepeat = $_POST["userPwdRepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (invalidUsername($userName) !== false) exit(header("location: ../user_sign_in.php?error=invalidUsernameInput"));
    if (userPwdValidate($userPwd) !== false) exit(header("location: ../user_sign_in.php?error=pwdValidate"));
    if (pwdMatch($userPwd, $userPwdRepeat) !== false) exit(header("location: ../user_sign_in.php?error=pwdMatch"));
    if (userExists($conn, $userName, $userEmail) !== false) exit(header("location: ../user_sign_in.php?error=usernameOrEmailExists"));

    $sql = "INSERT INTO users (userName, userEmail, userFirstName, userLastName, userPWD) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) exit(header("location: ../user_sign_in.php?error=stmtFailed"));

    $hashedPwd = password_hash($userPwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $userName, $userEmail, $userFirstName, $userLastName, $hashedPwd);
    mysqli_stmt_execute($stmt);

    $sqlAssocUserImage = "SELECT * FROM users WHERE userName='$userName' AND userEmail='$userEmail';";
    $userImageResult = mysqli_query($conn, $sqlAssocUserImage);

    if (mysqli_num_rows($userImageResult) > 0) {
        while ($row = mysqli_fetch_assoc($userImageResult)) {
            $userID = $row['userID'];
            $sqlUserImageStatus = "INSERT INTO users_upload (userID, userUploadStatus, userUploadImageData) VALUES ('$userID', 0, 'default')";
            mysqli_query($conn, $sqlUserImageStatus);
        }
    } 
    mysqli_stmt_close($stmt);
    exit(header("location: ../user_login.php?success=newUser"));
} else {
    exit(header("location: ../user_sign_in.php"));
}
