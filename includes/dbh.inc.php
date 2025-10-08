<?php
// define('ROOT_PATH', dirname(__DIR__) . '/');
// $env = parse_ini_file(ROOT_PATH.'.env');

$host = getenv("MYSQLHOST");
$user = getenv("MYSQLUSER");
$pass = getenv("MYSQLPASSWORD");
$db   = getenv("MYSQLDATABASE");

$conn = new mysqli($host, $user, $pass, $db);


if (!$conn) die(`Connection failed: ` . $conn);
