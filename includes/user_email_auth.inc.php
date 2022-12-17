<?php

if (isset($_POST["sendVerCode"]) || isset($_POST["resendVerCode"]) || isset($_POST["submitResetPwdLinkBtn"]) || isset($_POST["resendResetPwdLinkBtn"])) {

    $verificationCode = random_int(100000, 999999);
    $codeRequested = time();

    $site_path = $_SERVER["HTTP_HOST"];

    if (isset($_POST["sendVerCode"]) || isset($_POST["resendVerCode"])) {
        include_once 'session_check.inc.php';
        include_once 'user_profile.inc.php';
        mysqli_query($conn, "UPDATE users SET verificationCode = '$verificationCode', requestedAt = '$codeRequested' WHERE userID = '$userID';")
            or die(header("location: ../user_profile_email_verification.php?error=stmtFailed"));
    }

    if (isset($_POST["submitResetPwdLinkBtn"]) || isset($_POST["resendResetPwdLinkBtn"])) {
        include_once 'dbh.inc.php';
        $userEmail = mysqli_real_escape_string($conn, $_POST["user_forgot_password_email"]);

        $result = mysqli_query($conn, "SELECT userEmail FROM users WHERE userEmail = '$userEmail';");
        $userEmailDB = mysqli_fetch_column($result);

        if ($userEmailDB === $userEmail) {
            $token = bin2hex(random_bytes(50));
            mysqli_query($conn, "UPDATE users SET requestedAt = '$codeRequested', token = '$token' WHERE userEmail = '$userEmail';")
                or die(header("location: ../user_profile_email_verification.php?error=stmtFailed"));
        } else exit(header("location: ../user_forgot_password.php?error=email"));
    }

    $headers = "From:moonffeecoffeeshop@gmail.com \r\n";
    $to = $userEmail;

    if (isset($_POST["sendVerCode"]) || isset($_POST["resendVerCode"])) {
        $subject = "Here is your verification code for your email!";
        $message = "Verification code is: " . $verificationCode;
        if (mail($to, $subject, $message, $headers)) {
            exit(header("location: ../user_profile_email_verification.php?success=codeSent"));
        } else exit(header("location: ../user_profile_email_verification.php?error=codeNotSent"));
    }

    if (isset($_POST["submitResetPwdLinkBtn"]) || isset($_POST["resendResetPwdLinkBtn"])) {
        $subject = "Here is your verification code for your email!";
        $message = "Verification link: http://". $site_path . "/user_reset_password.php" . "?token=" . $token;
        if (mail($to, $subject, $message, $headers)) {
            exit(header("location: ../user_forgot_password.php?success=codeSent"));
        } else exit(header("location: ../user_forgot_password.php?error=codeNotSent"));
    }
}
