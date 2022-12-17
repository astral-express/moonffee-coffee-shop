<?php
include_once 'head.php';
?>

<section id="user_profile">
    <div class="container py-5">
        <div id="user-timeout" class="card mx-auto p-4 hidden">
            <h1 class="moonffee-font fw-bold text-center">Timeout!</h1>
            <h3 class="text-center my-1">You've been automatically logged out</h3>
            <hr>
            <p class="fw-bold text-center mb-3">In order to protect your data, we've logged you out from your session due to inactivity of 24h.</p>
            <p class="fw-bold text-center">Please login again to continue your journey on our site!</p>
            <hr class="m-0 mb-3">
            <a href='user_login.php' class='btn btn-primary fw-bold mb-2'>Login</a>
            <a href="index.php" type='button' class='input-group-text btn btn-secondary'>Return to profile</a>
        </div>
    </div>
</section>