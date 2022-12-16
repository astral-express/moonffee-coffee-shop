<?php
include_once 'head.php';
include_once 'header.php';
include_once 'includes/user_profile.inc.php';
?>

<section id="userProfile">
    <div class="container py-5">
        <div id="profile-settingsTab" class="card mx-auto p-4 hidden">
            <?php include_once 'user_profile_navbar.php'; ?>
            <h4 class="card-title text-center mt-3 m-0">
                <strong>Change your password</strong>
            </h4>
            <hr class="m-2">
            <form action="includes/user_change_password.inc.php" id="show_hide_password_form" method="POST">
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
                        echo "<p class='fw-bold text-danger text-center mb-3'>Passwords don't match, please try again!</p>";
                    } else if ($_GET["error"] == "pwdValidate") {
                        echo "<p class='fw-bold text-danger text-center mb-3'>Password should be at least 8 characters, include at least one upper case letter, one number, and one special character.</p>";
                    }
                }
                ?>
                <hr>
                <p class="card-text text-muted text-center">Confirm your current password:</p>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    <input type="password" name="currentPwd" class="form-control show_hide_password" aria-label="confirmCurrentPassword" placeholder="Current password" required>
                </div>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "pwdMismatch") {
                        echo "<p class='fw-bold text-danger text-center mb-3'>Incorrect current password!</p>";
                    }
                }
                ?>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="show_hide_password_checkbox">
                    <label class="form-check-label" for="show_hide_password_checkbox">Show passwords</label>
                </div>
                <div class="d-flex flex-column">
                    <input id="updateProfileBtn" type='submit' name='changePwd' class='input-group-text btn btn-primary my-2' for='inputGroupFile02' value='Change Password'>
                    <a href="user_profile.php" type='button' class='input-group-text btn btn-secondary'>Return to profile</a>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>