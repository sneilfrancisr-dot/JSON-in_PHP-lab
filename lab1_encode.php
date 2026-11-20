<?php

$student = array(
    "name" => "Maria",
    "age" => 21,
    "course" => "IT"
);

$jsonData = json_encode($student);

header("Content-Type: application/json");

echo $jsonData;

?>
