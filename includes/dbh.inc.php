<?php

$serverName = "localhost";
$dB_UID = "root";
$dB_PWD = "";
$dB_Name = "php_shop";

$conn = mysqli_connect($serverName, $dB_UID, $dB_PWD, $dB_Name);

if (!$conn) die("Connection failed: " . mysqli_connect_error());
