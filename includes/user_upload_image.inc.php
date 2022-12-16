<?php
require_once 'session_check.inc.php';
require_once 'user_profile.inc.php';

if (isset($_POST['submitUserImageUpload'])) {

    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileErr = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if (!is_uploaded_file($_FILES['file']['tmp_name'])) exit(header("location: ../user_profile.php?error=fileNotFound"));
    if (in_array($fileActualExt, $allowed) === false) exit(header("location: ../user_profile.php?error=invalidFileType"));
    if ($fileSize > 3000000) exit(header("location: ../user_profile.php?error=fileSizeExceeded"));
    if ($fileErr !== 0) exit(header("location: ../user_profile.php?error=fileErr"));
    else {
        $fileNameNew = $userID . '.' . $fileActualExt;
        $fileDestination = '../uploads/' . $fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        mysqli_query($conn, "UPDATE users_upload SET uploadstatus = 1, userUploadImageData = '$fileNameNew' WHERE userID = '$userID';")
        or die(header("location: ../user_profile.php?error=stmtFailed")); ;
        exit(header("location: ../user_profile.php?success=fileUploaded"));
    }
} else exit(header("location: ../user_profile.php"));
