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
                <strong>Delete profile</strong>
            </h4>
            <hr class="m-2">
            <p class="fw-bold fs-5 text-center text-red">This action will delete your profile and all of your data!</p>
            <button id="warningModal"type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteProfileModal">
                Delete your profile
            </button>
            <a href="user_profile.php" type='button' class='input-group-text btn btn-secondary mt-2'>Return to profile</a>
        </div>
        <div class="modal fade" id="deleteProfileModal" tabindex="-1" aria-labelledby="deleteProfileModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border border-danger border-2">
                    <div class="modal-header justify-content-center">
                        <h2 class="modal-title fw-bold">Warning!</h2>
                    </div>
                    <div class="modal-body text-center">
                        <p class="fw-bold fs-5 m-0">Are you sure you want to delete your profile?</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <form action="includes/user_delete_profile.inc.php" method="POST">
                            <p class="card-text text-muted text-center mb-2">Confirm your current password:</p>
                            <div id="show_hide_password" class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                <input type="password" class="form-control" name="currentPwd" aria-label="confirmCurrentPassword" placeholder="Password" required>
                                <span class="input-group-text" id="password-toggle-icon"><i id="eye" class="fa fa-eye-slash" aria-hidden="true"></i></span>
                            </div>
                            <?php
                            // Auto open modal if pwd is incorrect
                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "pwdMismatch") {
                                    echo 
                                    "<script>
                                    $(document).ready(function() {
                                        $('#warningModal').click();
                                    });
                                    </script>";
                                    echo "<p class='fw-bold text-danger text-center mb-3'>Incorrect password!</p>";
                                }
                            }
                            ?>
                            <div class="d-flex flex-column">
                                <input type='submit' name='deleteProfile' class='input-group-text btn btn-danger fw-bold mb-2' for='inputGroupFile02' value='Confirm deletion'>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php
include_once 'footer.php';
?>