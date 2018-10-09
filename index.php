<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once 'core/init.php';


$user = DB::getInstance()->query("SELECT firstname FROM user WHERE firstname = ?", array('alex'));

if($user->error()) {
    echo 'No user';
} else {
    echo 'OK!';
}