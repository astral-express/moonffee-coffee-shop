<?php
// define('ROOT_PATH', dirname(__DIR__) . '/');
// $env = parse_ini_file(ROOT_PATH.'.env');

$conn = new mysqli(getenv("MYSQLHOST"), getenv("MYSQLUSER"), getenv("MYSQLPASSWORD"), getenv("MYSQL_DATABASE"));

if ($conn -> connect_error) die(`Connection failed: ` . $conn -> connect_error);
