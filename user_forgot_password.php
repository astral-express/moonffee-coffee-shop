<?php
include_once 'head.php';
?>

<section id="user_forgot_password_page">
    <div class="container py-5">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "codeNotSent") {
                echo
                "<div id='user_code_verification' class='mx-auto bg-danger text-center m-0 hidden'>
                    <h5 class='fw-bold text-white pb-3 m-3'>Code couldn't be sent, please try again!</h5>
                </div>";
            } else if ($_GET["error"] == "stmtFailed") {
                echo
                "<div id='user_code_verification' class='mx-auto bg-danger text-center m-0 hidden'>
                    <h5 class='fw-bold text-white pb-3 m-3'>Something went wrong, please try again!</h5>
                </div>";
            }
        }
        if (isset($_GET["success"])) {
            if ($_GET["success"] == "codeSent") {
                echo
                "<div id='user_code_verification' class='mx-auto bg-success text-center m-0 hidden'>
                    <h5 class='fw-bold text-white pb-3 m-3'>Code successfully sent, please check your email inbox!</h5>
                </div>";
            }
        }
        ?>
        <div class="user-input-card mx-auto p-4 hidden">
            <h1 class="moonffee-font fw-bold text-center">Password reset</h1>
            <hr>
            <p class="fw-bold text-center mb-3">In order to reset your password, we need you to provide us an email of your account</p>
            <hr class="m-0 mt-1 mb-3">
            <form action="includes/user_email_auth.inc.php" id="password-reset-form" method="POST">
                <div class="mb-3">
                    <label for="user_forgot_password_email" class="form-label fw-bold ms-1">Your email:</label>
                    <input id="verCodeInput" type="email" name="user_forgot_password_email" placeholder="example@gmail.com" class="form-control" id="password-reset-email" aria-describedby="password-reset-email" required>
                    <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "codeExpired") {
                            echo "<p class='fw-bold text-danger text-center mt-2'>Your code has expired! <br>Please click on the resend button to get a new code!</p>";
                        } else if ($_GET["error"] == "email") {
                            echo "<p class='fw-bold text-danger text-center mt-2'>This email doesn't exist, please try again!</p>";
                        }
                    }
                    ?>
                    <p class="form-text text-dark ms-1 mt-2 text-center"><strong>Attention:</strong> Verification link will expire in <br>5 minutes once it's sent!</p>
                </div>
                <div class="d-flex flex-column">
                    <?php if (isset($_GET["error"]) || isset($_GET["success"])) {
                        echo "<button id='resendEmailLinkBtn' type='submit' name='resendResetPwdLinkBtn' class='btn btn-primary fw-bold'>Resend link <span id='countdown'></span></button>";
                        echo "<p id='resendCode' class='form-text text-dark ms-1 my-2 text-center'>Didn't get the link? Click on the button to get a new link!</p>";
                    } else echo "<button id='submitEmailLinkBtn' type='submit' class='btn btn-primary mb-2 fw-bold' name='submitResetPwdLinkBtn'>Get password reset link!</button>";
                    ?>
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>