<?php
include_once 'head.php';
?>
<section id="userSignIn-page">
    <div class="container p-5">
        <div class="user-input-card mx-auto hidden">
            <h2 class="moonffee fw-bold text-center">Sign In</h2>
            <hr>
            <p class="moonffee fs-6 fw-bold text-center">Sign In for better customer experience!</p>
            <form action="includes/user_sign_in.inc.php" id="show_hide_password_form" method="POST">
                <div class="mb-3">
                    <label for="userInputFirstName" class="form-label fw-bold ms-1">First name:</label>
                    <input type="text" name="firstName" placeholder="e.g. John" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="userInputLastName" class="form-label fw-bold ms-1">Last name:</label>
                    <input type="text" name="lastName" placeholder="e.g. Doe" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="userInputUsername" class="form-label fw-bold ms-1">Username:</label>
                    <input type="text" name="userName" placeholder="e.g. JohnDoe1" class="form-control" id="userInputUsername" required>
                </div>
                <?php if (isset($_GET["error"])) {
                    if ($_GET["error"] == "invalidUsernameInput") echo "<p class='fw-bold text-danger text-center mb-3'>Special characters aren't allowed, <br>only letters and numbers!</p>";
                } ?>
                <div class="mb-1">
                    <label for="userInputEmail" class="form-label fw-bold ms-1">Email address:</label>
                    <input type="email" name="userEmail" placeholder="e.g. example@gmail.com" class="form-control" id="userInputEmail" aria-describedby="email" required>
                    <div id="email" class="form-text text-dark ms-1 mb-3">We'll never share your email with anyone else.</div>
                </div>
                <?php if (isset($_GET["error"])) {
                    if ($_GET["error"] == "usernameOrEmailExists") echo "<p class='fw-bold text-danger text-center mb-3'>Username or email is already taken, please choose a different one!</p>";
                } ?>
                <label for="userInputPwd" class="form-label fw-bold ms-1">Password:</label>
                <div class="input-group mb-3">
                    <input type="password" name="userPwd" placeholder="Password" class="form-control show_hide_password" id="userInputPwd" aria-describedby="pwdHelp" required>
                    <div id="pwdHelp" class="form-text text-dark ms-1">Password should be at least 8 characters long, one upper case letter, one number and a special character.</div>
                </div>
                <label for="userInputRepPwd" class="form-label fw-bold ms-1">Repeat password:</label>
                <div class="mb-2">
                    <input type="password" name="userPwdRepeat" placeholder="Repeat password" class="form-control show_hide_password" id="userInputRepPwd" required>
                </div>
                <div class="form-check mb-1 ms-1">
                    <input type="checkbox" class="form-check-input" id="show_hide_password_checkbox">
                    <label class="form-check-label" for="show_hide_password_checkbox">Show passwords</label>
                </div>
                <p class='text-decoration-none text-dark m-0 ms-1 my-3'>Already have an account? Login <a href="user_login.php">here</a>!</p>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "pwdValidate") echo "<p class='fw-bold text-danger text-center mt-2'>Password should be at least 8 characters, have at least one upper case letter, one number, and one special character.</p>";
                    else if ($_GET["error"] == "pwdMatch") echo "<p class='fw-bold text-danger text-center mt-2'>Your password doesn't not match!</p>";
                    else if ($_GET["error"] == "stmtFailed") echo "<p class='fw-bold text-danger text-center mt-2'>Something went wrong, please try again!</p>";
                }
                ?>
                <hr>
                <div class="d-flex flex-column">
                    <button type="submit" class="btn btn-primary fw-bold mb-2" name="submitSignIn">Create an account!</button>
                    <a href="index.php" class="btn btn-secondary">Return to home page</a>
                </div>
            </form>
        </div>
    </div>
</section>