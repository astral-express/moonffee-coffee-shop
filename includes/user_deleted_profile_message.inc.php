<?php
require_once 'session_check.inc.php';
require_once 'user_profile.inc.php';

if (isset($_POST["submitDelProfile__Msg"])) {

    $userMsg = mysqli_real_escape_string($conn, $_POST["userMsg"]);

    mysqli_query($conn, "INSERT INTO users_del_msg (userID, userName, userMessage) VALUES ('$userID', '$userName', '$userMsg');")
        or die(header("location: ../user_delete_profile.php?error=stmtFailed"));

    mysqli_query($conn, "DELETE FROM users WHERE userID = '$userID';")
        or die(header("location: ../user_delete_profile.php?error=stmtFailed"));

    mysqli_query($conn, "DELETE FROM users_upload WHERE userID = '$userID';")
        or die(header("location: ../user_delete_profile.php?error=stmtFailed"));

    session_destroy();
    header("location: ../index.php");
} else if (isset($_POST["submitDelProfile__noMsg"])) {

    mysqli_query($conn, "DELETE FROM users WHERE userID = '$userID';")
        or die(header("location: ../user_delete_profile.php?error=stmtFailed"));

    mysqli_query($conn, "DELETE FROM users_upload WHERE userID = '$userID';")
        or die(header("location: ../user_delete_profile.php?error=stmtFailed"));

    session_destroy();
    header("location: ../index.php");
} else exit(header("location: ../user_delete_profile.php"));
