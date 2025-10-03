<?php

$env = parse_ini_file('../db_config.env');

$serverName = $env["MYSQLHOST"];
$dB_UID = $env["MYSQLUSER"];
$dB_PWD = $env["MYSQLPASSWORD"];
$dB_Name = $env["MYSQL_DATABASE"];

$conn = mysqli_connect($serverName, $dB_UID, $dB_PWD, $dB_Name);

if (!$conn) die("Connection failed: " . mysqli_connect_error());
