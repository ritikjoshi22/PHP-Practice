<?php
// Definition:
// Sessions are a way to store information (variables) across multiple pages. 
// Unlike cookies, session data is stored on the server, providing more security.

// Starting a session
session_start();

// Setting a session variable
$_SESSION["username"] = "JohnDoe";

// Displaying session variable
echo "Session started, username is: " . $_SESSION["username"] . "<br>";
?>