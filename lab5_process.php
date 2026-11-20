 <?php

header("Content-Type: application/json");

$input = file_get_contents("php://input");

$data = json_decode($input, true);

$name = $data["name"] ?? "";

if ($name != "") {
    $response = array(
        "status" => "success",
        "message" => "Welcome, " . $name . "!"
    );
} else {
    $response = array(
        "status" => "error",
        "message" => "Name is required."
    );
}

echo json_encode($response);

?>
