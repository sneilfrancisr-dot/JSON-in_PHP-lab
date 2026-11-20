<?php

header('Content-Type: application/json');

$user = array(
    "id" => 1,
    "name" => "Maria",
    "email" => "maria@example.com",
    "status" => "active"
);

$jsonResponse = json_encode($user);

echo $jsonResponse;

?>
