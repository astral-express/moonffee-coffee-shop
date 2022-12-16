<?php
include_once 'head.php';
include_once 'header.php';
include_once 'includes/user_profile.inc.php';
?>

<section id="userProfile">
    <div class="container py-4">
        <div class="user-welcome-title text-center mx-auto px-3 hidden">
            <?php
            echo "<h2 class='moonffee-font fw-bold my-3'>Welcome to your profile, " . $userName . "!</h2>";
            ?>
        </div>
        <?php
        if (isset($_GET["success"])) {
            if ($_GET["success"] == "profileUpdated") {
                echo
                "<div id='updated' class='user-update-notification bg-success text-center mx-auto m-3 px-3 hidden'>
                    <h4 class='fw-bold text-white mt-2'>Your profile info has been successfully updated!</h4>
                </div>";
            } else if ($_GET["success"] == "pwdUpdated") {
                echo
                "<div id='updated' class='user-update-notification bg-success text-center mx-auto m-3 px-3 hidden'>
                    <h4 class='fw-bold text-white mt-2'>Your password has been successfully changed!</h4>
                </div>";
            } else if ($_GET["success"] == "emailVerified") {
                echo
                "<div id='updated' class='user-update-notification bg-success text-center mx-auto m-3 px-3 hidden'>
                    <h4 class='fw-bold text-white mt-2'>Your email has been successfully verified!</h4>
                </div>";
            }
        }
        ?>
        <div id="user-card" class="card mx-auto my-5 hidden">
            <?php
            if ($userImageData === 'default') {
                echo
                "<div class='user-container'>
                    <img src='uploads/default_user_avatar.jpg' class='user-avatar' alt='user_Default_Profile_Image'>
                    <div class='user-avatar-buttons text-center'>
                        <form action='includes/user_upload_image.inc.php' method='POST' enctype='multipart/form-data'>
                            <input type='file' name='file' class='form-control' id='inputGroupFile02' style='display:none;'>
                            <label for='inputGroupFile02' class='btn btn-light mb-1'>Choose image</label>
                            <input type='submit' name='submitUserImageUpload' class='input-group-text btn btn-primary' for='inputGroupFile02' value='Upload Avatar'>
                        </form>
                    </div>
                </div>";
            } else {
                echo
                "<div class='user-container'>
                    <img src='uploads/" . $userImageData, "' class='user-avatar' alt='user_Profile_Image'>
                    <div class='user-avatar-buttons text-center'>
                        <form action='includes/user_upload_image.inc.php' method='POST' enctype='multipart/form-data'>
                            <input type='file' name='file' class='form-control' id='inputGroupFile02' style='display:none;'>
                            <label for='inputGroupFile02' class='btn btn-light mb-1'>Choose image</label>
                            <input type='submit' name='submitUserImageUpload' class='input-group-text btn btn-primary' for='inputGroupFile02' value='Upload avatar'>
                        </form>
                        <hr>
                        <button class='input-group-text btn btn-danger' data-bs-toggle='modal' data-bs-target='#userDeleteImg'>Delete Avatar</button>
                    </div>
                </div>";
            }
            ?>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "fileNotDeleted") {
                    echo
                    "<div id='updated' class='user-update-notification-image bg-danger text-center px-3 hidden'>
                        <p class='fw-bold text-white m-0 my-2'>There was an error deleting your image, please try again!</p>
                    </div>";
                } else if ($_GET["error"] == "fileNotFound") {
                    echo
                    "<div id='updated' class='user-update-notification-image bg-danger text-center px-3 hidden'>
                        <p class='fw-bold text-white m-0 my-2'>Please select an image to upload it!</p>
                    </div>";
                } else if ($_GET["error"] == "fileErr") {
                    echo
                    "<div id='updated' class='user-update-notification-image bg-danger text-center px-3 hidden'>
                        <p class='fw-bold text-white m-0 my-2'>There was an error uploading your image, please try again!</p>
                    </div>";
                } else if ($_GET["error"] == "invalidFileType") {
                    echo
                    "<div id='updated' class='user-update-notification-image bg-danger text-center px-3 hidden'>
                        <p class='fw-bold text-white m-0 my-2'>Invalid image type, please upload an image of type: .jpg,  jpeg, png, .gif!</p>
                    </div>";
                } else if ($_GET["error"] == "fileSizeExceeded") {
                    echo
                    "<div id='updated' class='user-update-notification-image bg-danger text-center px-3 hidden'>
                        <p class='fw-bold text-white m-0 my-2'>Your image size is too big, please choose an image that's max 3MB!</p>
                    </div>";
                } else if ($_GET["error"] == "stmtFailed") {
                    echo
                    "<div id='updated' class='user-update-notification-image bg-danger text-center px-3 hidden'>
                        <p class='fw-bold text-white m-0 my-2'>Something went wrong, please try again!</p>
                    </div>";
                }
            } else if (isset($_GET["success"])) {
                if ($_GET["success"] == "fileDeleted") {
                    echo
                    "<div id='updated' class='user-update-notification-image bg-success text-center px-3 hidden'>
                        <p class='fw-bold text-white m-0 my-2'>Image has been deleted!</p>
                    </div>";
                } else if ($_GET["success"] == "fileUploaded") {
                    echo
                    "<div id='updated' class='user-update-notification-image bg-success text-center px-3 hidden'>
                        <p class='fw-bold text-white m-0 my-2'>Image successfully uploaded!</p>
                    </div>";
                }
            }
            ?>
            <div class="card-body text-center">
                <h5 class="card-title">
                    <strong><?php echo $userName ?></strong>
                </h5>
                <p class="card-text text-muted">
                    <?php if ($userBio != null) echo $userBio;
                    else echo "No user bio set" ?>
                </p>
            </div>
            <ul id="user-data" class="list-group-user-data list-group list-group-flush text-center">
                <li class="list-group-item">
                    <span class="text-muted">First Name:</span>
                    <strong><?php echo $userFirstName ?></strong>
                </li>
                <li class="list-group-item">
                    <span class="text-muted">Last Name:</span>
                    <strong><?php echo $userLastName ?></strong>
                </li>
                <li class="list-group-item">
                    <span class="text-muted">Username:</span>
                    <strong><?php echo $userName ?></strong>
                </li>
                <?php
                $result = mysqli_query($conn, "SELECT active FROM users WHERE userID = '$userID';");
                $active = mysqli_fetch_column($result);
                if ($active == "1") {
                    echo
                    '<li class="list-group-item">
                        <span class="text-muted">Email:</span>
                        <strong>';
                    echo $userEmail;
                    echo '</strong>
                    </li>';
                } else {
                    echo
                    '<li class="list-group-item">
                        <span class="text-muted">Email:</span>
                        <strong>';
                    echo $userEmail;
                    echo '</strong>
                        <a href="user_profile_email_verification.php" class="btn btn-danger btnTooltip px-1 py-0 fw-bold">!</a>
                    </li>';
                }
                ?>
                <li class="list-group-item">
                    <span class="text-muted">Address:</span>
                    <strong>
                        <?php
                        if ($userAddress != null) echo $userAddress;
                        else echo "No current address";
                        ?>
                    </strong>
                </li>
            </ul>
            <div class="card-body text-center">
                <a href="user_profile_edit_info.php" type="button" class="card-link btn btn-primary">Profile Settings</a>
            </div>
        </div>
        <!-- User avatar delete warning -->
        <div class="modal fade" id="userDeleteImg" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="userEditModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Are you sure you want to delete your current profile image?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        This action will set your profile image to default user avatar and remove your current profile image.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <form action='includes/user_delete_image.inc.php' method='POST'>
                            <input type="submit" name="submitUserImageDelete" class="input-group-text btn btn-danger" value="Delete avatar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>