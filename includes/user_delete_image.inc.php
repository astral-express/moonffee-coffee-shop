<?php
require_once 'session_check.inc.php';
require_once 'user_profile.inc.php';

if (isset($_POST['submitUserImageDelete'])) {

    $fileDestination = '../uploads/' . $userImageData;
    if (!unlink($fileDestination)) exit(header("location: ../user_profile.php?error=fileNotDeleted"));

    $sql = "UPDATE users_upload SET uploadstatus = 0, userUploadImageData = 'default' WHERE userID = '$userID';";
    mysqli_query($conn, $sql);

    header("location: ../user_profile.php?success=fileDeleted");
}
