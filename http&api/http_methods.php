<?php
// Understanding HTTP Methods
// HTTP methods are used to communicate with servers in different ways. Here are the most commonly used methods:
// - GET: Used to retrieve data from the server.
// - POST: Used to send data to the server (e.g., submitting forms).
// - PUT: Used to update or create a resource on the server.
// - DELETE: Used to delete a resource on the server.

// Simulating HTTP Methods using PHP
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "This is a GET request. Data is usually retrieved using GET.<br>";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "This is a POST request. Data is usually submitted to the server using POST.<br>";
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    echo "This is a PUT request. It is used to update or create resources.<br>";
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    echo "This is a DELETE request. It is used to delete resources.<br>";
}

// Test this script by sending requests via Postman or using HTML forms.
?>
