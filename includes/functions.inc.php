<?php
$result = false;
function invalidUID($username)
{
    if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// function pwdValidate($pwd)
// {
//     $uppercase = preg_match('@[A-Z]@', $pwd);
//     $lowercase = preg_match('@[a-z]@', $pwd);
//     $number = preg_match('@[0-9]@', $pwd);
//     $specialChars = preg_match('@[^\w]@', $pwd);

//     if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
//         echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
//     } else {
//         echo 'Strong password.';
//     }
// }

function pwdMatch($pwd, $pwdRepeat)
{
    if ($pwd != $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE userUID = ? OR userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd)
{
    $sql = "INSERT INTO users (userName, userEmail, userUID, userPWD) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function loginUser($conn, $username, $pwd)
{
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../signup.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["userPWD"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../signup.php?error=wronglogin");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["userID"];
        $_SESSION["useruid"] = $uidExists["userUID"];
        header("location: ../index.php");
        exit();
    }
}
