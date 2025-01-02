<!DOCTYPE html>
<html>
<head>
    <title>Sanitize Input</title>
</head>
<body>
    <h2>Sanitization Example</h2>
    <form method="post" action="sanitize_input.php">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="email" name="email"><br><br>
        Website: <input type="text" name="website"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
// Check if form is submitted
if (isset($_POST["submit"])) {
    // Sanitize Name: Remove unwanted characters
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Sanitized Name: " . $name . "<br>";

    // Sanitize Email: Remove illegal characters from email
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "Sanitized Email: " . $email . "<br>";

    // Sanitize URL: Remove illegal characters from URL
    $website = filter_input(INPUT_POST, "website", FILTER_SANITIZE_URL);
    echo "Sanitized Website: " . $website . "<br>";
}
?>