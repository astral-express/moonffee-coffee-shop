<?php
// define('ROOT_PATH', dirname(__DIR__) . '/');
// $env = parse_ini_file(ROOT_PATH.'.env');

$dsn = "mysql:" . getenv("MYSQLUSER") . ":" . getenv("MYSQLPASSWORD") . "@" . getenv("MYSQLHOST") . ":" . getenv("MYSQLPORT") . "/railway";

// $conn = new PDO(getenv("MYSQLHOST"), getenv("MYSQLUSER"), getenv("MYSQLPASSWORD"), getenv("MYSQLDATABASE"), getenv("MYSQLPORT"));
$conn = new PDO($dsn);

if (!$conn) die(`Connection failed: ` . $conn);
