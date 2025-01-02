<?php
// Definition:
// Session timeouts are used to automatically end a session after a period of inactivity for security purposes.

// Starting a session
session_start();

// Setting a timeout period in seconds
$timeout = 600; // 10 minutes

// Checking the last activity time
if (isset($_SESSION["last_activity"]) && (time() - $_SESSION["last_activity"] > $timeout)) {
    // If the user is inactive for more than the timeout, destroy the session
    session_unset();
    session_destroy();
    echo "Session has timed out. Please log in again.<br>";
} else {
    // Update the last activity time
    $_SESSION["last_activity"] = time();
    echo "Session is active.<br>";
}

// Example of setting and accessing session variables
$_SESSION["username"] = "ActiveUser";
echo "Username in session: " . $_SESSION["username"] . "<br>";
?>
