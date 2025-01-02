<?php
// Definition:
// - JSON (JavaScript Object Notation) is a lightweight data format for exchanging data between a server and a client.
// - PHP provides functions `json_encode()` for encoding data to JSON format and `json_decode()` for decoding JSON data into PHP variables.

// JSON Encoding Example
// Create an associative array
$studentData = [
    "name" => "John Doe",
    "age" => 21,
    "subjects" => ["Math", "Science", "History"],
    "isEnrolled" => true
];

// Convert the PHP array to JSON format
$jsonData = json_encode($studentData, JSON_PRETTY_PRINT); // JSON_PRETTY_PRINT makes the output more readable
echo "<strong>JSON Encoding:</strong><br>";
echo $jsonData . "<br><br>";

// JSON Decoding Example
// Simulate JSON data received from an external source
$jsonString = '{
    "name": "Jane Smith",
    "age": 22,
    "subjects": ["English", "Biology", "Geography"],
    "isEnrolled": false
}';

// Decode the JSON string into a PHP associative array
$decodedArray = json_decode($jsonString, true); // `true` converts JSON object to an associative array
echo "<strong>JSON Decoding (Associative Array):</strong><br>";
print_r($decodedArray);
echo "<br><br>";

// Decode the JSON string into a PHP object
$decodedObject = json_decode($jsonString); // Without `true`, it converts JSON object to a PHP object
echo "<strong>JSON Decoding (Object):</strong><br>";
echo "Name: " . $decodedObject->name . "<br>";
echo "Age: " . $decodedObject->age . "<br>";
echo "First Subject: " . $decodedObject->subjects[0] . "<br>";
echo "Enrolled: " . ($decodedObject->isEnrolled ? "Yes" : "No") . "<br><br>";

// Error Handling in JSON
// Example of invalid JSON string
$invalidJson = "{'name': 'Invalid JSON'}"; // Single quotes are not allowed in JSON
$jsonError = json_decode($invalidJson);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo "<strong>Error Handling:</strong><br>";
    echo "JSON Error: " . json_last_error_msg() . "<br>";
}
?>
