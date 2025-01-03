<?php
// Working with APIs in PHP
// PHP provides various ways to interact with APIs, such as using `cURL` or `file_get_contents`.

// Example 1: Using file_get_contents (Simple GET Request)
echo "<strong>Using file_get_contents:</strong><br>";
$apiUrl = "https://jsonplaceholder.typicode.com/posts/1"; // A sample API endpoint
$response = file_get_contents($apiUrl);
echo "Response from API: <br>";
echo $response . "<br><br>";

// Example 2: Using cURL (GET Request)
echo "<strong>Using cURL for a GET request:</strong><br>";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts/1");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
$response = curl_exec($curl);
curl_close($curl);
echo "Response from API: <br>";
echo $response . "<br><br>";

// Example 3: Using cURL (POST Request)
echo "<strong>Using cURL for a POST request:</strong><br>";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");
curl_setopt($curl, CURLOPT_POST, true); // Specify that this is a POST request
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query([
    'title' => 'Sample Post',
    'body' => 'This is the body of the sample post.',
    'userId' => 1,
]));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
echo "Response from API (POST): <br>";
echo $response . "<br><br>";

// Notes:
// - Always validate API responses and handle errors.
// - Use secure protocols (e.g., HTTPS) when working with APIs.
?>
