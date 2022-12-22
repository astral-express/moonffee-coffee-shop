<?php
require_once 'session_check.inc.php';
require_once 'user_profile.inc.php';

if (isset($_POST["proceedToCheckout"])) {

    // TEST
    // $paypal = $_POST["paypalRadio"];
    // $cards = $_POST["cardsRadio"];

    // $cardName = mysqli_real_escape_string($conn, $_POST["cardName"]);
    // $cardNumber = mysqli_real_escape_string($conn, $_POST["cardNumber"]);
    // $cardMonth = $_POST["cardMonth"];
    // $cardYear = $_POST["cardYear"];
    // $CVV = mysqli_real_escape_string($conn, $_POST["CVV"]);

    $orderFirstName = mysqli_real_escape_string($conn, $_POST["orderFirstName"]);
    $orderLastName = mysqli_real_escape_string($conn, $_POST["orderLastName"]);
    $orderEmail = mysqli_real_escape_string($conn, $_POST["orderEmail"]);
    $orderAddress = mysqli_real_escape_string($conn, $_POST["orderAddress"]);
    $orderAddress2 = mysqli_real_escape_string($conn, $_POST["orderAddress2"]);
    $orderAdditionalNotes = mysqli_real_escape_string($conn, $_POST["orderAdditionalNote"]);

    mysqli_query($conn, "INSERT INTO user_order (orderUserID, orderFirstName, orderLastName, orderEmail, orderAddress, orderAddress2, orderNote) VALUES ('$userID', '$orderFirstName', '$orderLastName', '$orderEmail', '$orderAddress', '$orderAddress2', '$orderAdditionalNotes');")
        or die(header("location: ../user_checkout.php?error=stmtFailed"));

    exit(header("location: ../user_checkout.php?success=purchaseConfirmed"));
}
