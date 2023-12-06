<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../class/Fruit.php';


// Import necessary classes and configure headers
// ...

// Create an instance of the Employee class
$database = new Database();
$db = $database->getConnection();

$item = new Fruit($db);

// Parse and assign data from the request
$data = json_decode(file_get_contents("php://input"));
$item->name = $data->name;
$item->season = $data->season;
$item->state = $data->state;
$item->supply = $data->supply;
$item->cost = $data->cost;


// Call the createEmployee method
if ($item->createFruitImport()) {
    echo 'Record created successfully.';
} else {
    echo 'Record could not be created.';
}



?>