<?php

$GLOBALS['config'] =  array(
    'site' => array(
        'name' => 'Torque CMS'
    ),
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'xxxx',
        'password' => 'xxxx',
        'db' => 'torque'
    ),
    'remember' => array(
        'cookie_name'   => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    ),
    'setting' => array(
        'debugging' => true
    )
);