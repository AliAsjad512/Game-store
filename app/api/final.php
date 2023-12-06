<?php
//
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");
//
//// URL of the REST API endpoint
//$api_url = 'https://www.cheapshark.com/api/1.0/stores';
//
//// Data to send in the POST request (in JSON format)
//$post_data = array(
//    'key1' => 'value1',
//    'key2' => 'value2'
//);
//
//// Encode the POST data as JSON
//$json_post_data = json_encode($post_data);
//
//// Headers for the request (including the Content-Type header for JSON)
//$headers = array(
//    'Content-Type: application/json', // Set the content type to JSON
//    'Authorization: Bearer YourAccessToken' // Example authorization header
//);
//
//// Initialize cURL session
//$ch = curl_init();
//
//// Set cURL options for GET request
//curl_setopt($ch, CURLOPT_URL, $api_url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//
//// Execute the GET request
//$response_get = curl_exec($ch);
//
//if ($response_get === false) {
//    echo 'cURL GET request error: ' . curl_error($ch);
//} else {
//    // Parse the JSON response
//    $data_get = json_decode($response_get, true); // Set the second argument to true to get an associative array
//
//    // Handle the parsed data
//    if ($data_get !== null) {
//        // $data_get now contains the JSON response as an array
//        var_dump($data_get);
//    } else {
//        echo 'Error parsing JSON response.';
//    }
//}
//
//// Reset cURL options for POST request
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $json_post_data); // Send JSON data
//
//// Set headers for the POST request
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//
//// Execute the POST request
//$response_post = curl_exec($ch);
//
//if ($response_post === false) {
//    echo 'cURL POST request error: ' . curl_error($ch);
//} else {
//    // Parse the JSON response
//    $data_post = json_decode($response_post, true); // Set the second argument to true to get an associative array
//
//    // Handle the parsed data
//    if ($data_post !== null) {
//        // $data_post now contains the JSON response as an array
//        var_dump($data_post);
//    } else {
//        echo 'Error parsing JSON response.';
//    }
//}
//
//// Close cURL session
//curl_close($ch);
//?>
<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// Allow only specific methods
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

// Allow credentials (e.g., cookies)
header("Access-Control-Allow-Credentials: true");

// URL of the REST API endpoint
$api_url = 'https://www.cheapshark.com/api/1.0/stores';

// Initialize cURL session
$ch = curl_init();

// Set cURL options for GET request
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the GET request
$response_get = curl_exec($ch);

if ($response_get === false) {
    echo 'cURL GET request error: ' . curl_error($ch);
} else {
    // Parse the JSON response
    $data_get = json_decode($response_get, true); // Set the second argument to true to get an associative array




    // Handle the parsed data
    if ($data_get !== null) {
        // Output the JSON response
        echo json_encode($data_get);
    } else {
        echo 'Error parsing JSON response.';
    }
}

// Close cURL session
curl_close($ch);
?>





