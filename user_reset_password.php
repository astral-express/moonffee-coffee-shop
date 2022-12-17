<?php
include_once 'head.php';
$serverURI = $_SERVER["REQUEST_URI"];
$url = parse_url($serverURI);
parse_str($url['query'], $params);
if (array_key_exists('token', $params) === true) {
    $token = $params['token'];
    setcookie("linkToken", "$token", time() + 300);
};
?>

<section id="user_reset_password_page">
    <div class="container py-5">
        <div class="user-input-card mx-auto p-4 hidden">
            <h4 class="moonffee-font card-title text-center mt-3 m-0">
                <strong>Change your password</strong>
            </h4>
            <hr class="m-2">
            <form action="includes/user_reset_password.inc.php" id="show_hide_password_form" method="POST">
                <div class="input-group my-3">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="newPwd" class="form-control show_hide_password" aria-label="newPassword" placeholder="New password" required>
                </div>
                <div class="input-group mb-2">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="newPwdRepeat" class="form-control show_hide_password" aria-label="confirmNewPassword" placeholder="Confirm New password" required>
                </div>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "newPwdMatch") {
                        echo "<p class='fw-bold text-danger text-center mb-3'>Passwords doesn't match, please try again!</p>";
                    } else if ($_GET["error"] == "pwdValidate") {
                        echo "<p class='fw-bold text-danger text-center mb-3'>Password should be at least 8 characters, include at least one upper case letter, one number, and one special character.</p>";
                    }
                }
                ?>
                <hr>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="show_hide_password_checkbox">
                    <label class="form-check-label" for="show_hide_password_checkbox">Show passwords</label>
                </div>
                <div class="d-flex flex-column">
                    <input id="resetPwd" type='submit' name='resetPwd' class='input-group-text btn btn-primary my-2' for='inputGroupFile02' value='Change Password' />
                    <a href="user_login.php" type='button' class='input-group-text btn btn-secondary'>Cancel</a>
                </div>
            </form>
        </div>
    </div>
</section>