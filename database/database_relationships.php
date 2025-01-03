<?php
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

// One-to-One Relationship: Retrieve users and their profiles
echo "<h3>One-to-One Relationship</h3>";
$sql = "SELECT users.name, profiles.bio 
        FROM users 
        JOIN profiles ON users.id = profiles.user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['name'] . ", Bio: " . $row['bio'] . "<br>";
    }
}

// One-to-Many Relationship: Retrieve users and their orders
echo "<h3>One-to-Many Relationship</h3>";
$sql = "SELECT users.name, orders.product 
        FROM users 
        JOIN orders ON users.id = orders.user_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['name'] . ", Product: " . $row['product'] . "<br>";
    }
}

// Many-to-Many Relationship: Retrieve students and their courses
echo "<h3>Many-to-Many Relationship</h3>";
$sql = "SELECT students.name, courses.title 
        FROM students 
        JOIN student_courses ON students.id = student_courses.student_id 
        JOIN courses ON courses.id = student_courses.course_id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Student: " . $row['name'] . ", Course: " . $row['title'] . "<br>";
    }
}

// Close the database connection
$conn->close();
?>
