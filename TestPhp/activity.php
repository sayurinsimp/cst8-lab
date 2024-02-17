<?php
// 1 (working)
$cookie_name = "username";
$cookie_value = "Francisco";

setcookie($cookie_name, $cookie_value, time() + (60*60*24*30));

// if (isset($_COOKIE[$cookie_name])) {
//     echo "Cookie is set! Cookie name is $cookie_value";
// }
// else{
//     echo "Cookie not set!";
// }

// 2 (working)

$retrieved_value = $_COOKIE["username"];
echo $retrieved_value;

// 3

$n3_cookie_name = "user_details";
$n3_cookie_value = "Kenji";
$n3_user_id = "12345";
$n3_token = "abc123token";
$n3_preferences = array("theme" => "light", "language" => "en_US");

$n3_encoded = json_encode($n3_preferences);

setcookie($n3_cookie_name, $n3_cookie_value, $n3_user_id, $n3_token, $n3_encoded, time() + (60*60*24*30));

?>
