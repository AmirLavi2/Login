<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once 'core/init.php';


$user = DB::getInstance()->update('user', 2, array(
    'password' => 'newPass'
));