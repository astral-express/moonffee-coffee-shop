<?php

$servername = "localhost";
$dBUID = "root";
$dBPWD = "";
$dBName = "coffee_shop";

$conn = mysqli_connect($servername, $dBUID, $dBPWD, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
