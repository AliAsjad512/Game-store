<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



include_once '../config/database.php';
include_once '../class/Fruit.php';

// Create a new Database instance and establish a connection
$database = new Database();
$db = $database->getConnection();

// Create an instance of the Employee class
$item = new Fruit($db);

// Parse and assign data from the request
$data = json_decode(file_get_contents("php://input"));
$item->id = $data->id;
$item->name = $data->name;
$item->season = $data->season;
$item->state = $data->state;
$item->supply = $data->supply;
$item->cost = $data->cost;

// Call the updateEmployee method
if ($item->updateFruitImport()) {
    // Record updated successfully
    echo json_encode(array("message" => "Record updated successfully."));
} else {
    // Data could not be updated
    http_response_code(503); // Adjust the HTTP status code as needed
    echo json_encode(array("message" => "Data could not be updated"));
}


?>