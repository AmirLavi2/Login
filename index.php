<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once 'core/init.php';


$user = DB::getInstance()->get('user', array('firstname', '=', 'amir'));

if(!$user->count()) {
    echo 'No user';
} else {
    // foreach($user->results() as $user) {
    //     echo $user->firstname, '<br>';
    // } 
    echo $user->first()->firstname;
}