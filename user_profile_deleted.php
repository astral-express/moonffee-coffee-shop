<?php
include_once 'head.php';
?>

<section id="userProfile">
    <div class="container py-5">
        <div id="profile-deleted" class="card mx-auto p-4 hidden">
            <h1 class="moonffee fw-bold text-center">Farewell..</h1>
            <h3 class="text-center mb-4">We're sad to see you leave :(</h3>
            <span class="ms-1">Write a comment:</span>
            <form action="includes/user_deleted_profile_message.inc.php" method="POST">
                <div class="input-group mb-2">
                    <textarea id="userMsgArea" name="userMsg" class="form-control" placeholder="Thank you for being with us, if you would like to, please let us know on why have you deleted your account and what could we improve for better user experience in future"></textarea>
                </div>
                <hr>
                <div class="d-flex flex-column">
                    <input id='submitMessageBtn' type='submit' name='submitDelProfile__Msg' class='input-group-text btn btn-primary fw-bold mb-2' value='Submit your message'>
                    <input type='submit' name='submitDelProfile__noMsg' class='input-group-text btn btn-secondary' value='Return to home page'></input>
                </div>
            </form>
        </div>
    </div>
</section>