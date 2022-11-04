<?php
include_once 'header.php';
?>
<section class="signup-form">
    <h2>Log In</h2>
    <div class="signup-form-container">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Log In</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login info</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, please try again</p>";
            }
        }
        ?>
    </div>
    <?php
    include_once 'footer.php';
    ?>