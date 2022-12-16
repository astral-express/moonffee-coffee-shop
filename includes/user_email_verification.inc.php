<?php
include_once 'session_check.inc.php';
include_once 'user_profile.inc.php';

if (isset($_POST["submitVerCodeBtn"])) {
    
    $sql = "SELECT active, verificationCode, requestedAt FROM users WHERE userID = '$userID';";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    $verificationCode = $data['verificationCode'];
    $requestedAt = $data['requestedAt'];
    $currentTime = time();
    $verifiedAt = date("Y-m-d H:i:s" , $currentTime);

    $userCodeInput = $_POST["userInputVerCode"];

    if ((time() - $requestedAt) > 1000 * 60 * 5) exit(header("location: ../user_profile_email_verification.php?error=codeExpired"));
    if ($verificationCode !== $userCodeInput) exit(header("location: ../user_profile_email_verification.php?error=codeMismatch"));

    mysqli_query($conn, "UPDATE users SET active = 1, verifiedAt = '$verifiedAt' WHERE userID = '$userID';")
    or die(header("location: ../user_profile_email_verification.php?error=stmtFailed"));

    exit(header("location: ../user_profile.php?success=emailVerified"));
} else exit(header("location: ../user_profile_email_verification.php"));