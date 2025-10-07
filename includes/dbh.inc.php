<?php
define('ROOT_PATH', dirname(__DIR__) . '/');
$env = parse_ini_file(ROOT_PATH.'.env');

// $env = parse_ini_file(ROOT_PATH.'db_test.ini');

$conn = new mysqli($env["MYSQLHOST"], $env["MYSQLUSER"], $env["MYSQLPASSWORD"], $env["MYSQL_DATABASE"]);

if ($conn -> connect_error) die(`Connection failed: ` . $conn -> connect_error);
