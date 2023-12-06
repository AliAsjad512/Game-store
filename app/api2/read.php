<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../class/Fruit.php';

// Create a new Database instance and establish a connection
$database = new Database();
$db = $database->getConnection();

// Create an instance of the Employee class
$item = new Fruit($db);

// Call the getFruitImports method to retrieve all records
$stmt = $item->getFruitImports();
$itemCount = $stmt->rowCount();

if ($itemCount > 0) {
    $fruitArr = array(); // Change $employeeArr to $fruitArr
    $fruitArr["body"] = array();
    $fruitArr["itemCount"] = $itemCount;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        // Create an array for each record
        $fruit_item = array( // Change $employee_item to $fruit_item
            "id" => $id,
            "name" => $name,
            "season" => $season,
            "state" => $state,
            "supply" => $supply,
            "cost" => $cost,
        );

        // Add the record to the body of the response
        array_push($fruitArr["body"], $fruit_item); // Change $employeeArr to $fruitArr
    }

    // Send the response as JSON
    http_response_code(200);
    echo json_encode($fruitArr); // Change $employeeArr to $fruitArr
} else {
    // No records found
    http_response_code(404);
    echo json_encode(array("message" => "No records found."));
}

?>