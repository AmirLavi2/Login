<?php
require_once 'core/init.php';

if(Input::exists()) {
    echo 'Submitted';
}
?>

<form action="" method="post">
    <div class="field">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname" autocomplete="off">
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="field">
        <label for="password_again">Repeat Password</label>
        <input type="password" name="password_again" id="password_again">
    </div>

    <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>

    <input type="submit" value="Register">
</form>