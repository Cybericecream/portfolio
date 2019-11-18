<?php

include 'phpAssets/assets.php';

include_once $_SERVER['DOCUMENT_ROOT']  . '/data/data.php';

$title = "Nathaniel Barry";

include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/head.php';

include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/header.php';

?>

<div class="body grid-container">
    <div class="grid-x grid-padding-x grid-padding-y">
        <div class="cell small-10 small-offset-1 medium-4 medium-offset-4 text-center log-in-box">
            <h2>Log In</h2>
            <br />
            <form class="log-in-form">
                <label for="user">Username</label>
                <input id="user" class="box" type="text" placeholder="Username">
                <label for="pass">Password</label>
                <input id="pass" class="box" type="password" placeholder="Password">
                <input id="submit" class="log-in" type="submit" value="Log In">
            </form>
        </div>
    </div>
</div>

<?php

include  $_SERVER['DOCUMENT_ROOT']  . '/phpAssets/footer.php';

?>
