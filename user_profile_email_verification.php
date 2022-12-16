<?php
include_once 'head.php';
include_once 'includes/user_profile.inc.php';
?>

<section id="userEmailVerification">
    <div class="container py-5">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "codeNotSent") {
                echo
                "<div id='user_code_verification' class='mx-auto bg-danger text-center m-0 hidden'>
                    <h5 class='fw-bold text-white pb-3 m-3'>Code couldn't be sent, please try again!</h5>
                </div>";
                }
            else if ($_GET["error"] == "stmtFailed") {
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
                    <h5 class='fw-bold text-white pb-3 m-3'>Code was successfully sent!</h5>
                </div>";
            }
        }
        ?>
        <div class="email-verification mx-auto p-4 hidden">
            <h1 class="moonffee fw-bold text-center">Email verification</h1>
            <hr>
            <p class="fw-bold text-center mb-3">In order to finish creating your account and have full access to our services, you need to verify your email</p>
            <form action="includes/user_email_auth.inc.php" id="email-verification-form" class="d-flex flex-column" method="POST">
                <?php
                if (isset($_GET["error"]) || isset($_GET["success"])) {
                    echo "<button id='resendCodeBtn' type='submit' name='resendVerCode' class='btn btn-primary fw-bold'>Resend code <span id='countdown'></span></button>";
                    echo "<p id='resendCode' class='form-text text-dark ms-1 my-2 text-center'>Didn't get the code? Click on the button to resend a new code!</p>";
                } else {
                    echo "<button type='submit' name='sendVerCode' class='btn btn-primary fw-bold'>Get code</button>";
                }
                ?>
                <p class="form-text text-dark ms-1 mt-2 text-center"><strong>Attention:</strong> Verification code will expire in <br>5 minutes once it's sent!</p>
            </form>
            <hr class="m-0 mt-1 mb-3">
            <form action="includes/user_email_verification_check.inc.php" id="email-verification-form" method="POST">
                <div class="mb-3">
                    <label for="userVerificationCode" class="form-label fw-bold ms-1">Your verification code:</label>
                    <input id="verCodeInput" type="text" name="userInputVerCode" placeholder="Verification code" class="form-control" id="verificationCode" aria-describedby="verificationCode" required>
                    <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "codeExpired") {
                                echo "<p class='fw-bold text-danger text-center mt-2'>Your code has expired! <br>Please click on the resend button to get a new code!</p>";
                        } else if ($_GET["error"] == "codeMismatch") {
                            echo "<p class='fw-bold text-danger text-center mt-2'>Incorrect verification code, please check your code and try again!</p>";
                        }
                    }
                    ?>
                </div>
                <div class="d-flex flex-column">
                    <button id="submitVerCodeBtn" type="submit" class="btn btn-primary mb-2 fw-bold" name="submitVerCodeBtn">Verify!</button>
                    <a href="user_profile.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>