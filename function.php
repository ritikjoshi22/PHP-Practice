<?php
// PHP Script to Demonstrate Functions

echo "PHP Functions Demonstration:<br><br>";

// 1. Defining and Calling Functions
echo "1. Defining and Calling Functions:<br>";

// Function definition
function greet($name) {
    echo "Hello, $name!<br>";
}

// Function call
greet("Alice");
greet("Bob");

echo "<br>";

// 2. Default and Dynamic Arguments
echo "2. Default and Dynamic Arguments:<br>";

// Function with default argument
function greetWithDefault($name = "Guest") {
    echo "Hello, $name!<br>";
}

// Calling the function without an argument (uses default)
greetWithDefault();

// Calling the function with an argument
greetWithDefault("Charlie");

echo "<br>";

// 3. Return Values
echo "3. Return Values:<br>";

// Function that calculates the square of a number and returns the result
function square($number) {
    return $number * $number;
}

// Storing the result of the function call
$result = square(4);
echo "The square of 4 is: $result<br>";

echo "<br>";

// 4. Variable Scope (Local, Global, Static)
echo "4. Variable Scope:<br>";

// Local variable example
function localScopeExample() {
    $localVar = 10; // Local variable
    echo "Local variable inside function: $localVar<br>";
}
localScopeExample();
// Uncommenting the line below will cause an error because $localVar is not accessible outside the function
// echo $localVar;

// Global variable example
$globalVar = 20; // Global variable
function globalScopeExample() {
    global $globalVar; // Access global variable using 'global' keyword
    echo "Global variable inside function: $globalVar<br>";
}
globalScopeExample();

// Static variable example
function staticScopeExample() {
    static $staticVar = 0; // Static variable retains its value between function calls
    $staticVar++;
    echo "Static variable value: $staticVar<br>";
}
staticScopeExample();
staticScopeExample();
staticScopeExample();

echo "<br>";

// 5. Built-in PHP Functions (e.g., array_map, implode, explode)
echo "5. Built-in PHP Functions:<br>";

// Example: Using array_map to apply a function to each element of an array
$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map(function($num) {
    return $num * $num;
}, $numbers);
echo "Squared numbers using array_map: " . implode(", ", $squaredNumbers) . "<br>";

// Example: Using implode to join array elements into a string
$words = ["PHP", "is", "awesome"];
$sentence = implode(" ", $words);
echo "Sentence using implode: $sentence<br>";

// Example: Using explode to split a string into an array
$csv = "apple,banana,orange";
$fruits = explode(",", $csv);
echo "Fruits using explode: " . implode(", ", $fruits) . "<br>";

?>
