<?php

/*
Password hashing converts plain text passwords into a secure hash. The hash is stored in the database, ensuring that even if the database is compromised, the original password cannot be easily retrieved.
*/

// Password Hashing and Verification Example

// Step 1: Define a password entered by the user
$password = "securePassword123";

// Step 2: Hash the password using PHP's password_hash function
$hashedPassword = password_hash($password, PASSWORD_DEFAULT); // PASSWORD_DEFAULT automatically selects the best available algorithm
echo "Original Password: $password<br>";
echo "Hashed Password: $hashedPassword<br>";

// Step 3: Verify the password entered by the user
$userInputPassword = "securePassword123"; // Example user input
if (password_verify($userInputPassword, $hashedPassword)) {
    echo "Password verified successfully!<br>";
} else {
    echo "Password verification failed!<br>";
}
?>
