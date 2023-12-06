<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../class/Fruit.php';


$database =  new Database();
$db = $database->getConnection();

// Create an instance of the Employee class
$item = new Fruit($db);

// Parse and assign data from the request
$data = json_decode(file_get_contents("php://input"));
$item->id = $data->id;

// Call the deleteEmployee method
if ($item->deleteFruitImport()) {
    // Record deleted successfully
    echo json_encode(array("message" => "Record deleted successfully."));
} else {
    // Data could not be deleted
    http_response_code(503); // Adjust the HTTP status code as needed
    echo json_encode(array("message" => "Data could not be deleted"));
}

?>