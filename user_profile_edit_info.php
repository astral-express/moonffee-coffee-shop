<?php
include_once 'head.php';
include_once 'header.php';
include_once 'includes/user_profile.inc.php';
?>


<section id="user_profile">
    <div class="container py-5">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "updateFailed" || $_GET["error"] == "stmtFailed") {
                echo
                "<div id='failed' class='user-update-notification bg-danger text-center mx-auto m-3 px-3 hidden'>
                    <h3 class='fw-bold text-white mt-2'>Sorry!</h3>
                    <p class='fw-bold fs-5 text-white mt-2'>There was an error on updating your profile, please try again!</p>
                </div>";
            }
        }
        ?>
        <div id="profile-settingsTab" class="card mx-auto p-4 hidden">
            <?php include_once 'user_profile_navbar.php'; ?>
            <h4 class="card-title text-center mt-3 m-0">
                <strong>Edit your profile</strong>
            </h4>
            <hr class="m-2">
            <form action="includes/user_edit_profile_info.inc.php" method="POST">
                <p class="card-text text-muted text-center mb-1">First name:</p>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="newFN" class="form-control" name="editFirstName" aria-label="userFirstName" placeholder="First Name" value="<?php echo $userFirstName; ?>">
                </div>
                <p class="card-text text-muted text-center mb-1">Last name:</p>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="newLN" class="form-control" name="editLastName" aria-label="userLastName" placeholder="Last Name" value="<?php echo $userLastName; ?>">
                </div>
                <p class="card-text text-muted text-center mb-1">Username:</p>
                <div class="input-group mb-1">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="newUN" class="form-control" name="editUsername" aria-label="userName" placeholder="Username" value="<?php echo $userName; ?>">
                </div>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "usernameExists") {
                        echo "<p class='fw-bold text-danger text-center mb-3'>This username is already taken, please pick a different username!</p>";
                    }
                }
                ?>
                <p class="card-text text-muted text-center mb-1">Your email:</p>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="text" id="newEM" class="form-control" name="editEmail" aria-label="userEmail" placeholder="Email" value="<?php echo $userEmail; ?>">
                </div>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emailExists") {
                        echo "<p class='fw-bold text-danger text-center mb-3'>This email already exists, please choose a different one!</p>";
                    }
                }
                ?>
                <p class="card-text text-muted text-center mb-2">Your address and bio:</p>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                    <input type="text" id="newAD" class="form-control" name="editAddress" aria-label="userAddress" placeholder="Address" value="<?php if ($userAddress != null) echo $userAddress;
                                                                                                                                                else echo ""; ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-pen"></i></span>
                    <input type="text" id="newDesc" class="form-control" name="editBio" aria-label="userBio" placeholder="Bio" value="<?php if ($userBio != null) echo $userBio;
                                                                                                                                        else echo ""; ?>">
                </div>
                <hr>
                <p class="card-text text-muted text-center">Confirm your current password to save changes on your profile:</p>
                <div class="input-group mb-1">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    <input type="password" name="confirmCurrentPwd" class="form-control" aria-label="confirmCurrentPassword" placeholder="Password" required>
                </div>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "pwdMismatch") {
                        echo "<p class='fw-bold text-danger text-center mb-3'>Incorrect password!</p>";
                    }
                }
                ?>
                <div class="d-flex flex-column">
                    <input id="updateProfileBtn" type='submit' name='updateProfile' class='input-group-text btn btn-primary my-2' for='inputGroupFile02' value='Save Changes'>
                    <a href="user_profile.php" type='button' class='input-group-text btn btn-secondary'>Return to profile</a>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>