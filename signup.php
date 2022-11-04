<?php
include_once 'header.php';
?>
<section class="signup-form">
    <h2>Sign In</h2>
    <div class="signup-form-container">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name..." required>
            <input type="text" name="username" placeholder="Username..." required>
            <input type="email" name="email" placeholder="Email..." required>
            <input type="password" name="pwd" placeholder="Password..." required>
            <input type="password" name="pwdrepeat" placeholder="Repeat password..." required>
            <button type="submit" name="submit">Sign up</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "invaliduid") {
                echo "<p>Choose a different username</p>";
            } else if ($_GET["error"] == "pwdmatch") {
                echo "<p>Password doesn't match</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, please try again</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username already taken</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>You have succesfully signed up</p>";
            }
        }
        ?>
    </div>
    <?php
    include_once 'footer.php';
    ?>