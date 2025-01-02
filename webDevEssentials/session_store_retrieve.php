<?php
// Definition:
// Session data can be stored and retrieved at any point during the session lifecycle.

// Starting a session
session_start();

// Storing data in session
$_SESSION["user_id"] = 123;
$_SESSION["role"] = "admin";

// Retrieving and displaying session data
echo "User ID: " . $_SESSION["user_id"] . "<br>";
echo "Role: " . $_SESSION["role"] . "<br>";

// Destroying the session (optional)
// session_destroy(); // Uncomment to delete all session data
?>
