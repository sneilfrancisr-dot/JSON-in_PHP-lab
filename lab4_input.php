<?php

header("Content-Type: text/plain");

$input = file_get_contents("php://input");

$data = json_decode($input, true);

if ($data !== null) {
    echo "Username: " . $data["username"] . "\n";
    echo "Password: " . $data["password"];
} else {
    echo "Invalid JSON input.";
}

?>
