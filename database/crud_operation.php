<?php
// Definition:
// CRUD operations are fundamental for interacting with databases. 
// These include Create (Insert), Read (Select), Update, and Delete queries.

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

// Create: Insert a record into the users table
$sql = "INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully.<br>";
} else {
    echo "Error inserting record: " . $conn->error . "<br>";
}

// Read: Retrieve all records from the users table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Email: " . $row['email'] . "<br>";
    }
} else {
    echo "No records found.<br>";
}

// Update: Update a record in the users table
$sql = "UPDATE users SET name = 'Jane Doe' WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully.<br>";
} else {
    echo "Error updating record: " . $conn->error . "<br>";
}

// Delete: Delete a record from the users table
$sql = "DELETE FROM users WHERE id = 1";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully.<br>";
} else {
    echo "Error deleting record: " . $conn->error . "<br>";
}

// Close the database connection
$conn->close();
?>
