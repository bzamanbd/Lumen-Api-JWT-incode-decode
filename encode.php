<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
include 'vendor/autoload.php';

$key = '0123456789';

$payload = [
 'name' => 'Ripon',
 'city' => 'Dhaka',
 'phone' => '01971556799'
];

$encodedData = JWT::encode($payload, $key, 'HS256');

echo $encodedData;


?>