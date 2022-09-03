<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
include 'vendor/autoload.php';

$encodedString = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiUmlwb24iLCJjaXR5IjoiRGhha2EiLCJwaG9uZSI6IjAxOTcxNTU2Nzk5In0.Z00wL7Mr9zjuoIkG3ffToMJxJnFQsJ4t7NSNOf1x7cc';

$key= '0123456789';

$decodedData = JWT::decode($encodedString, new Key($key, 'HS256'));

print_r($decodedData);


?>