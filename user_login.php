<?php
include_once 'head.php';
?>
<section id="user_login_page">
    <div class="container p-5">
        <?php
        if (isset($_GET["success"])) {
            if ($_GET["success"] == "newUser") {
                echo
                "<div id='new_user_notification' class='mx-auto bg-success text-center m-0 hidden'>
                    <h2 class='moonffee-font fw-bold text-white mt-3'>Welcome</h2>
                    <h5 class='fw-bold text-white pb-4 m-3'>You have successfully made an account, please enter your info of your new account to login!</h5>
                </div>";
            } else if ($_GET["success"] == "pwdUpdated") {
                echo
                "<div id='new_user_notification' class='mx-auto bg-success text-center m-0 hidden'>
                    <h2 class='moonffee fw-bold text-white mt-3'>Password changed</h2>
                    <h5 class='fw-bold text-white pb-4 m-3'>You can now login into your account with the new password!</h5>
                </div>";
            }
        }
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "invalidToken") {
                echo
                "<div id='new_user_notification' class='mx-auto bg-danger text-center m-0 hidden'>
                    <h2 class='moonffee-font fw-bold text-white mt-3'>Link expired</h2>
                    <h5 class='fw-bold text-white pb-4 m-3'>Link you've opened to change password has expired, please click on Forgot password link if you wish to change your password</h5>
                </div>";
            } else if ($_GET["error"] == "loginToPurchase") {
                echo
                "<div id='new_user_notification' class='mx-auto bg-danger text-center m-0 hidden'>
                    <h2 class='moonffee-font fw-bold text-white mt-3'>Login/Registration required!</h2>
                    <h5 class='fw-bold text-white pb-4 m-3'>You must login or sign in <a href='user_sign_in.php' class='text-white'>(click here to sign in)</a> to add items to cart and purchase them!</h5>
                </div>";
            }
        }
        ?>
        <div class="user-input-card mx-auto hidden">
            <h2 class="moonffee-font fw-bold text-center">Login</h2>
            <hr>
            <?php
            if (isset($_GET["success"])) {
                if ($_GET["success"] == "newUser") echo "<p class='moonffee fs-6 fw-bold text-center'>Welcome newcomer, we're happy to see you!</p>";
            } else echo "<p class='moonffee-font fs-6 fw-bold text-center'>Welcome back, we're happy to see you!</p>";
            ?>
            <form action="includes/user_login.inc.php" method="post" class="d-flex flex-column justify-content-between p-2">
                <div class="mb-1">
                    <label for="userInputUsernameEmail" class="form-label fw-bold ms-1">Username or Email:</label>
                    <input type="text" name="userName-userEmail" placeholder="Username / Email" class="form-control" id="userInputUsernameEmail" required>
                </div>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "incorrectLoginUsernameOrEmail") echo "<p class='fw-bold text-danger m-0 ms-1 mb-3'>Wrong username or email!</p>";
                }
                ?>
                <label for="userInputPwd" class="form-label fw-bold ms-1">Password:</label>
                <div id="show_hide_password" class="input-group mb-1">
                    <input type="password" name="userPwd" placeholder="Password" class="form-control" id="userInputPwd" required>
                    <span class="input-group-text" id="password-toggle-icon"><i id="eye" class="fa fa-eye-slash" aria-hidden="true"></i></span>
                </div>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "incorrectLoginPwd") echo "<p class='fw-bold text-danger m-0 ms-1 mb-1'>Wrong password!</p>";
                }
                ?>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "stmtFailed") echo "<p class='fw-bold text-danger text-center mb-1 mt-3'>Something went wrong, please try again!</p>";
                }
                ?>
                <a href="user_forgot_password.php" class='text-decoration-none text-primary m-0 ms-1 mt-1'>Forgot password?</a>
                <p class='text-decoration-none text-dark m-0 ms-1 mt-1'>Don't have an account? Make one <a href="user_sign_in.php">here</a>!</p>
                <hr>
                <div class="d-flex flex-column">
                    <button type="submit" class="btn btn-primary mb-2 fw-bold" name="submitLogin">Login!</button>
                    <a href="index.php" class="btn btn-secondary">Return to home page</a>
                </div>
            </form>
        </div>
    </div>
</section>