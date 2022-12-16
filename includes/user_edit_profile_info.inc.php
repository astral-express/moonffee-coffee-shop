<?php
require_once 'session_check.inc.php';
require_once 'user_profile.inc.php';

if (isset($_POST["updateProfile"])) {

    $checkCurrentPwd = $_POST["confirmCurrentPwd"];

    $verifiedPWD = pwdCheck($conn, $userID, $checkCurrentPwd);
    if ($verifiedPWD === false) exit(header("location: ../user_profile_edit_info.php?error=pwdMismatch"));

    $newUserName = mysqli_real_escape_string($conn, $_POST["editUsername"]);
    if ($newUserName !== $_SESSION["userName"]) {
        if (userExists($conn, $newUserName, $newUserName) !== false) exit(header("location: ../user_profile_edit_info.php?error=usernameExists"));
    }
    
    $newEmail = mysqli_real_escape_string($conn, $_POST["editEmail"]);
    if ($newEmail !== $_SESSION["userEmail"]) {
        if (userExists($conn, $newEmail, $newEmail) !== false) exit(header("location: ../user_profile_edit_info.php?error=emailExists"));
    }

    $newFirstName = mysqli_real_escape_string($conn, $_POST["editFirstName"]);
    $newLastName = mysqli_real_escape_string($conn, $_POST["editLastName"]);
    $newAddress = mysqli_real_escape_string($conn, $_POST["editAddress"]);
    $newBio = mysqli_real_escape_string($conn, $_POST["editBio"]);

    mysqli_query($conn, "UPDATE users SET userName = '$newUserName', userEmail = '$newEmail', userFirstName = '$newFirstName', userLastName = '$newLastName', userAddress = '$newAddress', userBio = '$newBio' WHERE userID = '$userID';")
        or die(header("location: ../user_profile_edit_info.php?error=stmtFailed"));

    $_SESSION["userName"] = $newUserName;
    $_SESSION["userFirstName"] = $newFirstName;
    $_SESSION["userLastName"] = $newLastName;
    $_SESSION["userEmail"] = $newEmail;
    $_SESSION["userAddress"] = $newAddress;
    $_SESSION["userBio"] = $newBio;

    session_regenerate_id();
    header("location: ../user_profile.php?success=profileUpdated");
} else exit(header("location: ../user_profile_edit_info.php?error=updateFailed"));
// possible optimization on this page