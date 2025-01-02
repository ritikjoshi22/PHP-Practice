<?php
// PHP Script to Demonstrate Error Handling

echo "PHP Error Handling Demonstration:<br><br>";

// 1. TRY-CATCH Block
echo "1. TRY-CATCH Block:<br>";

try {
    // Intentionally creating a division by zero error
    $numerator = 10;
    $denominator = 0;

    if ($denominator == 0) {
        throw new Exception("Division by zero is not allowed!"); // Throwing an exception
    }

    $result = $numerator / $denominator;
    echo "Result: $result<br>";
} catch (Exception $e) {
    // Handling the exception
    echo "Error Caught: " . $e->getMessage() . "<br>";
}

echo "<br>";

// 2. Custom Error Handlers
echo "2. Custom Error Handlers:<br>";

// Define a custom error handler
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Custom Error:<br>";
    echo "Error Number: $errno<br>";
    echo "Error Message: $errstr<br>";
    echo "Error File: $errfile<br>";
    echo "Error Line: $errline<br>";
    // Stop execution for severe errors
}

// Set the custom error handler
set_error_handler("customErrorHandler");

// Intentionally triggering an error (undefined variable)
echo $undefinedVariable; // This will trigger a custom error handler

// Restore the default error handler (optional)
// restore_error_handler();

echo "<br>";

// 3. TRY-CATCH with Custom Exception Class
echo "3. TRY-CATCH with Custom Exception Class:<br>";

// Define a custom exception class
class CustomException extends Exception {
    public function customMessage() {
        return "Custom Exception: [{$this->getCode()}] {$this->getMessage()} in {$this->getFile()} on line {$this->getLine()}<br>";
    }
}

try {
    $age = 15;
    if ($age < 18) {
        throw new CustomException("You must be 18 or older to register!", 1001);
    }
    echo "You are eligible to register.<br>";
} catch (CustomException $e) {
    echo $e->customMessage();
}

?>
