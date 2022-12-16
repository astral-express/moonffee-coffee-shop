<?php
include_once 'session_check.inc.php';
include_once 'user_profile.inc.php';

if (isset($_POST["changePwd"])) {

    $newPwd = mysqli_real_escape_string($conn, $_POST["newPwd"]);
    $newPwdRepeat = mysqli_real_escape_string($conn, $_POST["newPwdRepeat"]);
    $checkCurrentPwd = mysqli_real_escape_string($conn, $_POST["currentPwd"]);

    if (userPwdValidate($newPwd) !== false) exit(header("location: ../user_profile_edit_password.php?error=pwdValidate"));

    if (pwdMatch($newPwd, $newPwdRepeat) !== false) exit(header("location: ../user_profile_edit_password.php?error=newPwdMatch"));

    $verifiedPWD = pwdCheck($conn, $userID, $checkCurrentPwd);
    if ($verifiedPWD === false) exit(header("location: ../user_profile_edit_password.php?error=pwdMismatch"));

    $newHashedPWD = password_hash($newPwd, PASSWORD_DEFAULT);

    mysqli_query($conn, "UPDATE users SET userPWD = '$newHashedPWD' WHERE userID = '$userID';")
        or die(header("location: ../user_profile_edit_info.php?error=stmtFailed"));

    session_regenerate_id();
    header("location: ../user_profile.php?success=pwdUpdated");
}