<?php
// Definition:
// Cookies are small files stored on the user's browser. They are used to remember user preferences or track user activity.

// Setting a cookie (name, value, expiration time)
setcookie("username", "JohnDoe", time() + (86400 * 7), "/"); // Cookie valid for 7 days

// Checking if the cookie is set
if (isset($_COOKIE["username"])) {
    echo "Cookie is set! Value: " . $_COOKIE["username"] . "<br>";
} else {
    echo "Cookie is not set.<br>";
}
?>
