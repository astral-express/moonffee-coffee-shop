<?php
// define('ROOT_PATH', dirname(__DIR__) . '/');
// $env = parse_ini_file(ROOT_PATH.'.env');

$conn = mysqli_connect(getenv("MYSQLHOST"), getenv("MYSQLUSER"), getenv("MYSQLPASSWORD"), getenv("MYSQL_DATABASE"), 3306);

if ($conn -> connect_error) die(`Connection failed: ` . $conn -> connect_error);
