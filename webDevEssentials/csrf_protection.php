<?php

/*
    Cross-Site Request Forgery (CSRF) is an attack where unauthorized actions are performed on behalf of a user. To prevent this, tokens are used to validate requests.
*/

session_start();

// Generate CSRF Token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Generate a secure random token
}

// Validate CSRF Token
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'], $token)) {
        die("CSRF validation failed.");
    }
    echo "Form submitted successfully with valid CSRF token!<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSRF Protection Example</title>
</head>
<body>
    <form method="POST" action="">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
