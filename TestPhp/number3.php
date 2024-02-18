<?php

$cookie_name = "user_details";
$raw_user_details = array(
    'name' => 'Francisco',
    'user_id' => '12345',
    'token' => 'abc123token',
    'preferences' => array(
        'theme' => 'light',
        'language' => 'en_US'
    )
);

$encoded = json_encode($raw_user_details);

setcookie($cookie_name, $encoded, time() + (60*60*24*30), "/");

/* CHECKER
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie name is $cookie_name!";
}
else{
    echo "Cookie not set!";
}
*/

session_start();

$session_id = session_id();

echo "The session ID is $session_id.";
