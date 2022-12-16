<?php
require_once 'user_profile.inc.php';
$userLoginTime = $_SESSION["userLoginTime"];

if (isset($userLoginTime)) {
    if ((time() - $userLoginTime) > 86400) {
        session_unset();
        session_destroy();
        exit(header('Location: ../user_inactivity_logout.php'));
    } else {
        session_regenerate_id(true);
        $userLoginTime = time();
    }
} else return;