<?php
// define('ROOT_PATH', dirname(__DIR__) . '/');
// $env = parse_ini_file(ROOT_PATH.'.env');

$conn = mysqli_connect(getenv("MYSQLHOST"), getenv("MYSQLUSER"), getenv("MYSQLPASSWORD"), getenv("MYSQLDATABASE"), getenv("MYSQLPORT"));

if ($conn -> connect_error) die(`Connection failed: ` . $conn -> connect_error);
