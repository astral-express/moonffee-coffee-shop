<?php
require_once 'session_check.inc.php';
require_once 'user_profile.inc.php';

if (isset($_POST["deleteProfile"])) {

    $checkCurrentPwd = mysqli_real_escape_string($conn, $_POST["currentPwd"]);

    $verifiedPWD = pwdCheck($conn, $userID, $checkCurrentPwd);
    if ($verifiedPWD === false) exit(header("location: ../user_delete_profile.php?error=pwdMismatch"));

    header("location: ../user_profile_deleted.php");
} else exit(header("location: ../user_delete_profile.php"));
