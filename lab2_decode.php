<?php

$jsonData = '{"name":"Maria","age":21,"email":"maria@example.com"}';

$objectData = json_decode($jsonData);

$arrayData = json_decode($jsonData, true);

echo "Object: " . $objectData->name . "<br>";

echo "Array: " . $arrayData["email"];

?>
