<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name: Must not be empty and should only contain letters and spaces
    if (empty($_POST["name"])) {
        echo "Name is required.<br>";
    } elseif (!preg_match("/^[a-zA-Z\s]*$/", $_POST["name"])) {
        echo "Only letters and spaces are allowed in the name.<br>";
    } else {
        echo "Valid Name: " . htmlspecialchars($_POST["name"]) . "<br>";
    }

    // Validate Email: Must be a valid email format
    if (empty($_POST["email"])) {
        echo "Email is required.<br>";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.<br>";
    } else {
        echo "Valid Email: " . htmlspecialchars($_POST["email"]) . "<br>";
    }

    // Validate Age: Must be a numeric value
    if (empty($_POST["age"])) {
        echo "Age is required.<br>";
    } elseif (!filter_var($_POST["age"], FILTER_VALIDATE_INT)) {
        echo "Age must be an integer.<br>";
    } else {
        echo "Valid Age: " . htmlspecialchars($_POST["age"]) . "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Validate Input</title>
</head>
<body>
    <h2>Validation Example</h2>
    <form method="post" action="validate_input.php">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Age: <input type="text" name="age"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
