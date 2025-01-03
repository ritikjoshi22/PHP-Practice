<?php
session_start();

// Simulate roles for users
$users = [
    ['username' => 'admin', 'role' => 'admin'],
    ['username' => 'editor', 'role' => 'editor'],
    ['username' => 'viewer', 'role' => 'viewer'],
];

// Assign a role to the session
$_SESSION['role'] = 'editor'; // Example: Currently logged in as 'editor'

// Role-based access control
function checkAccess($requiredRole) {
    if ($_SESSION['role'] !== $requiredRole) {
        die("Access Denied! You need $requiredRole privileges to access this resource.");
    }
}

// Example: Admin-only access
echo "<h3>Admin Section</h3>";
checkAccess('admin'); // This will block users without 'admin' role
echo "Welcome to the Admin Section!";
?>
