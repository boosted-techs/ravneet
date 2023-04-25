<?php

$server = 'localhost';
$db_user_name = 'u623597462_raveent';
$db_user_pass = '8K@kj1I|Hx';
$db = "u623597462_raveent";

$conn = new PDO("mysql:host=localhost;dbname=u623597462_raveent", "u623597462_raveent", $db_user_pass, []);


function create_unique_id(){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 20; $i++) {
        $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>