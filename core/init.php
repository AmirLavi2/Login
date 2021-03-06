<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'amir',
        'password' => '5590',
        'db' => 'login'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 30
    ),
    'session' => array(
        'session_name' => 'user'
    )
);

spl_autoload_register(function($class){
    require_once 'class/' . $class . '.php';
});

require_once 'function/sanitize.php';