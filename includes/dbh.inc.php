<?php

// db test
// define('ROOT_PATH', dirname(__DIR__) . '/');
// $env = parse_ini_file(ROOT_PATH.'.env');
// $conn = new mysqli($env["MYSQLHOST"], $env["MYSQLUSER"], $env["MYSQLPASSWORD"], $env["MYSQL_DATABASE"]);

$database = getenv("${{Moonffee-DB.MYSQL_DATABASE}}");
$hostname = getenv("${{Moonffee-DB.MYSQLHOST}}");
$password = getenv("${{Moonffee-DB.MYSQLPASSWORD}}");
$username = getenv("${{Moonffee-DB.MYSQLUSER}}");
$port = 3306;

$conn = new mysqli($hostname, $username, $password, $database, $port);

if ($conn -> connect_error) die(`Connection failed: ` . $conn -> connect_error);
