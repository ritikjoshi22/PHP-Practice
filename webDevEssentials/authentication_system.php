<?php
//Authentication systems ensure that only authorized users can access specific parts of the application.

session_start();

// Simulate a database with user credentials
$users = [
    ['username' => 'admin', 'password' => password_hash('admin123', PASSWORD_DEFAULT)], // Password is hashed
    ['username' => 'user', 'password' => password_hash('user123', PASSWORD_DEFAULT)],
];

// Check login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    foreach ($users as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            echo "Login successful! Welcome, $username<br>";
            exit;
        }
    }
    echo "Invalid username or password.<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Authentication Example</title>
</head>
<body>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
