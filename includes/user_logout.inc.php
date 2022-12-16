<?php
require_once 'session_check.inc.php';
session_unset();
session_destroy();
exit(header("location: ../index.php"));