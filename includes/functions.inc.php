<?php

function invalidUsername($userName)
{
    if (!preg_match('/^[a-zA-Z0-9]*$/', $userName)) $result = true;
    else $result = false;
    return $result;
}

function userPwdValidate($userPwd)
{
    $uppercase = preg_match('@[A-Z]@', $userPwd);
    $lowercase = preg_match('@[a-z]@', $userPwd);
    $number = preg_match('@[0-9]@', $userPwd);
    $specialChars = preg_match('@[^\w]@', $userPwd);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($userPwd) < 8) $result = true;
    else $result = false;
    return $result;
}

function pwdMatch($userPwd, $userPwdRepeat)
{
    if ($userPwd != $userPwdRepeat) $result = true;
    else $result = false;
    return $result;
}

function pwdCheck($conn, $userID, $chkCurrentPwd)
{
    $sql = "SELECT * FROM users WHERE userID = '$userID';";
    $userData = mysqli_query($conn, $sql);

    if (mysqli_num_rows($userData) > 0) {
        while ($row = mysqli_fetch_assoc($userData)) {
            $userPWD = $row['userPWD'];
            $verifyPWD = password_verify($chkCurrentPwd, $userPWD);
            return $verifyPWD;
        }
    } else exit(header("location: ../user_profile_edit_info.php?error=query=error"));
}

function userExists($conn, $userName, $userEmail)
{
    $sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) exit(header("location: ../signup.php?error=stmtFailed"));

    mysqli_stmt_bind_param($stmt, "ss", $userName, $userEmail);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) return $row;
    else $result = false;
    mysqli_stmt_close($stmt);
    return $result;
}

function fetchUserImageData($conn, $userID)
{
    $sql = "SELECT userUploadImageData FROM users_upload WHERE userID = '$userID';";
    $fetchUserImgData = mysqli_query($conn, $sql);
    $userImgDataResult = mysqli_fetch_assoc($fetchUserImgData);
    $userImgData = $userImgDataResult["userUploadImageData"];
    return $userImgData;
}

function emailVerificationChk($conn, $userID)
{
    $sql = "SELECT active FROM users WHERE userID = '$userID';";
    $activeStatus = mysqli_query($conn, $sql);
    return $activeStatus;
}

// function explodeImgFileExt($userID, $userName, $userImageData)
// {
//     $imgFilePath = '../uploads/' . $userID . '_' . $userName . '_' . 'user_profileImage' . $userImageData . '.' . '*';
//     $imgFileInfo = glob($imgFilePath);
//     $imgFileExt = explode(".", $imgFileInfo[0]);
//     $imgFileActualExt = end($imgFileExt);
//     return $imgFileActualExt;
// }

// function fetchUserData($conn, $userID)
// {
//     $sql = "SELECT * FROM users WHERE userID = '$userID';";
//     $userData = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($userData) > 0) {
//         while ($row = mysqli_fetch_assoc($userData)) {
//             $userID = $row['userID'];
//             $sqlUserImageFetch = "SELECT * FROM users_upload WHERE ID = '$userID';";
//             $userImageResult = mysqli_query($conn, $sqlUserImageFetch);
//             while ($rowImage = mysqli_fetch_assoc($userImageResult)) {
//                 if ($rowImage['uploadstatus'] == 1) $result = true;
//                 else $result = false;
//                 return $result;
//             }
//         }

//     } else exit(header("location: ../user_profile.php?query=error"));
// }