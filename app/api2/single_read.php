<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../class/Fruit.php';
$database = new Database();
$db = $database->getConnection();

// Create an instance of the Employee class
// Create an instance of the Fruit class
$item = new Fruit($db);

// Get the ID from the request
$item->id = isset($_GET['id']) ? $_GET['id'] : die();

// Call the getSingleFruitImport method
$item->getSingleFruitImport();

if ($item->name != null) {
    // Create an array for the single record
    $fruit_arr = array(
        "id" => $item->id,
        "name" => $item->name,
        "season" => $item->season,
        "state" => $item->state,
        "supply" => $item->supply,
        "cost" => $item->cost,
    );

    // Send the response as JSON
    http_response_code(200);
    echo json_encode($fruit_arr);
} else {
    // Fruit not found
    http_response_code(404);
    echo json_encode(array("message" => "Fruit not found."));
}


?>