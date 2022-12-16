<?php
require_once '..\vendor\autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;


if (isset($_POST["sendVerCode"]) || isset($_POST["resendVerCode"]) || isset($_POST["submitResetPwdLinkBtn"]) || isset($_POST["resendResetPwdLinkBtn"])) {

    $verificationCode = random_int(100000, 999999);
    $codeRequested = time();

    if (isset($_POST["sendVerCode"]) || isset($_POST["resendVerCode"])) {
        include_once 'session_check.inc.php';
        include_once 'user_profile.inc.php';
        mysqli_query($conn, "UPDATE users SET verificationCode = '$verificationCode', requestedAt = '$codeRequested' WHERE userID = '$userID';")
            or die(header("location: ../user_profile_email_verification.php?error=stmtFailed"));
    }

    if (isset($_POST["submitResetPwdLinkBtn"]) || isset($_POST["resendResetPwdLinkBtn"])) {
        include_once 'dbh.inc.php';
        $userEmail = mysqli_real_escape_string($conn, $_POST["userForgotPwdEmail"]);

        $result = mysqli_query($conn, "SELECT userEmail FROM users WHERE userEmail = '$userEmail';");
        $userEmailDB = mysqli_fetch_column($result);

        if ($userEmailDB === $userEmail) {
            $token = bin2hex(random_bytes(50));
            mysqli_query($conn, "UPDATE users SET requestedAt = '$codeRequested', token = '$token' WHERE userEmail = '$userEmail';")
                or die(header("location: ../user_profile_email_verification.php?error=stmtFailed"));
        } else exit(header("location: ../user_forgot_password.php?error=email"));
    }

    $mail = new PHPMailer(true);
    //Create a new SMTP instance
    $smtp = new SMTP();

    //Enable connection-level debug output
    $smtp->do_debug = SMTP::DEBUG_CONNECTION;


    try {

        //SMTP needs accurate times, and the PHP time zone MUST be set
        //This should be done in your php.ini, but this is how to do it if you don't have access to that
        date_default_timezone_set('Etc/UTC');

        //Create a new PHPMailer instance
        $mail = new PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        //SMTP::DEBUG_OFF = off (for production use)
        //SMTP::DEBUG_CLIENT = client messages
        //SMTP::DEBUG_SERVER = client and server messages
        $mail->SMTPDebug = 3;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        //Set the SMTP port number:
        // - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
        // - 587 for SMTP+STARTTLS
        $mail->Port = 465;

        //Set the encryption mechanism to use:
        // - SMTPS (implicit TLS on port 465) or
        // - STARTTLS (explicit TLS on port 587)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Set AuthType to use XOAUTH2
        $mail->AuthType = 'XOAUTH2';

        //Start Option 1: Use league/oauth2-client as OAuth2 token provider
        //Fill in authentication details here
        //Either the gmail account owner, or the user that gave consent
        $email = 'mailertester3000@gmail.com';
        $clientId = '191375432693-urkdcmnoiopjh0qke2ehe74s3a0e8k5a.apps.googleusercontent.com';
        $clientSecret = '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';

        //Obtained by configuring and running get_oauth_token.php
        //after setting up an app in Google Developer Console.
        $refreshToken = '1//099Iw9o6SOw8FCgYIARAAGAkSNwF-L9IrHSy8YRYqQn48R-aiWrUxNyrHK1ZA-5PgtOVKXmLHrLNnad0qe7Q7XcjyTOdiQPF3zTE';

        //Create a new OAuth2 provider instance
        $provider = new Google(
            [
                'clientId' => $clientId,
                'clientSecret' => $clientSecret,
            ]
        );

        //Pass the OAuth provider instance to PHPMailer
        $mail->setOAuth(
            new OAuth(
                [
                    'provider' => $provider,
                    'clientId' => $clientId,
                    'clientSecret' => $clientSecret,
                    'refreshToken' => $refreshToken,
                    'userName' => $email,
                ]
            )
        );

        //Set who the message is to be sent from
        //For gmail, this generally needs to be the same as the user you logged in as
        $mail->setFrom('mailertester3000@gmail.com', 'Moonffee Coffee Shop');

        //Set who the message is to be sent to
        $mail->addAddress($userEmail);

        //Set the subject line
        $mail->Subject = 'Your email verification code is:';

        try {
            //Connect to an SMTP server
            if (!$smtp->connect('smtp.gmail.com', 25)) {
                throw new Exception('Connect failed');
            }
            //Say hello
            if (!$smtp->hello(gethostname())) {
                throw new Exception('EHLO failed: ' . $smtp->getError()['error']);
            }
            //Get the list of ESMTP services the server offers
            $e = $smtp->getServerExtList();
            //If server can do TLS encryption, use it
            if (is_array($e) && array_key_exists('STARTTLS', $e)) {
                $tlsok = $smtp->startTLS();
                if (!$tlsok) {
                    throw new Exception('Failed to start encryption: ' . $smtp->getError()['error']);
                }
                //Repeat EHLO after STARTTLS
                if (!$smtp->hello(gethostname())) {
                    throw new Exception('EHLO (2) failed: ' . $smtp->getError()['error']);
                }
                //Get new capabilities list, which will usually now include AUTH if it didn't before
                $e = $smtp->getServerExtList();
            }
            //If server supports authentication, do it (even if no encryption)
            if (is_array($e) && array_key_exists('AUTH', $e)) {
                if ($smtp->authenticate('username', 'password')) {
                    echo 'Connected ok!';
                } else {
                    throw new Exception('Authentication failed: ' . $smtp->getError()['error']);
                }
            }
        } catch (Exception $e) {
            echo 'SMTP error: ' . $e->getMessage(), "\n";
        }
        $smtp->quit();

        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        // $mail->CharSet = PHPMailer::CHARSET_UTF8;
        if (isset($_POST["sendVerCode"]) || isset($_POST["resendVerCode"])) {
            $mail->Body = '<h3>Here is your verification code for your email!</h3>
            <p>Verification code is: <b>' . $verificationCode . '</b></p>
            <p>This code will expire in 5 minutes, please resend the code on our site if it expired.</p><br>
            <p>Kind regards from Moonffee';

            $mail->AltBody = 'This is your verification code: ' . $verificationCode;
            exit(header("location: ../user_profile_email_verification.php?success=codeSent"));
        }

        if (isset($_POST["submitResetPwdLinkBtn"]) || isset($_POST["resendResetPwdLinkBtn"])) {
            $mail->Body = '<h3>Here is your verification link for password reset!</h3>
            <p>Verification link: <b><a href="http://localhost:3000/user_reset_password.php' . '?token=' . $token . '">Click to proceed with password resetting</a></b></p>
            <p>This link will expire in 5 minutes, please resend the link on our site if it expired.</p><br>
            <p>Kind regards from Moonffee';

            $mail->AltBody = 'This is your verification link: <a href="user_reset_password.php' . '?token=' . $token . '">Click to proceed with password resetting</a>';
            // exit(header("location: ../user_forgot_password.php?success=codeSent"));
            // $mail->Debugoutput = 'echo';
        }
    } catch (Exception $e) {
        exit(header("location: ../user_forgot_password.php?error=codeNotSent"));
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
