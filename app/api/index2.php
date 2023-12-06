<?php
//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
//header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
//
//// Set content type to JSON
//header("Content-Type: application/json; charset=UTF-8");
//
//function makeGetRequest($url) {
//    $ch = curl_init();
//
//    curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//    $response = curl_exec($ch);
//
//    if ($response === false) {
//        return ['error' => 'cURL GET request error', 'message' => curl_error($ch)];
//    }
//
//    $data = json_decode($response, true);
//
//    if ($data === null) {
//        return ['error' => 'Error parsing JSON response.'];
//    }
//
//    curl_close($ch);
//
//    return $data;
//}
//
//function makePostRequest($url, $postData) {
//    $ch = curl_init();
//
//    curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_POST, true);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
//
//    $response = curl_exec($ch);
//
//    if ($response === false) {
//        return ['error' => 'cURL POST request error', 'message' => curl_error($ch)];
//    }
//
//    $data = json_decode($response, true);
//
//    if ($data === null) {
//        return ['error' => 'Error parsing JSON response.'];
//    }
//
//    curl_close($ch);
//
//    return $data;
//}
//
//// URL of the REST API endpoints
//$getUrl = 'https://www.cheapshark.com/api/1.0/games?title=batman';
//$postUrl = 'https://www.cheapshark.com/api/1.0/postEndpoint';
//
//// Make GET request
//$getData = makeGetRequest($getUrl);
//var_dump($getData);
//
//// Make POST request
//$postData = ['key1' => 'value1', 'key2' => 'value2'];
//$postData = makePostRequest($postUrl, $postData);
//var_dump($postData);
//?>
