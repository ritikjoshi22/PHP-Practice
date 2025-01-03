<?php
// Definition:
// Prepared statements prevent SQL injection and improve performance by pre-compiling SQL queries.

// MySQL database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "test_db";

// Connect to MySQL database using MySQLi
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert using prepared statements
$sql = "INSERT INTO users (name, email) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ss", $name, $email);

$name = "Alice";
$email = "alice@example.com";

// Execute the statement
if ($stmt->execute()) {
    echo "Record inserted successfully.<br>";
} else {
    echo "Error inserting record: " . $stmt->error . "<br>";
}

// Fetch records using prepared statements
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("s", $email);

$email = "alice@example.com";
if($stmt->execute()){
    echo "Record fetched successfully.<br>";
}

// Bind result variables
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Email: " . $row['email'] . "<br>";
}

// Close the prepared statement and connection
$stmt->close();
$conn->close();
?>
