<?php
// PHP Script to Demonstrate Operators: Arithmetic, Logical, and Comparison

// 1. Arithmetic Operators
echo "Arithmetic Operators Demonstration:<br>";

// Addition
$a = 10;
$b = 20;
$sum = $a + $b; // Adds $a and $b
echo "Addition: $a + $b = $sum<br>";

// Subtraction
$difference = $b - $a; // Subtracts $a from $b
echo "Subtraction: $b - $a = $difference<br>";

// Multiplication
$product = $a * $b; // Multiplies $a and $b
echo "Multiplication: $a * $b = $product<br>";

// Division
$quotient = $b / $a; // Divides $b by $a
echo "Division: $b / $a = $quotient<br>";

// Modulus
$remainder = $b % $a; // Calculates the remainder of $b divided by $a
echo "Modulus: $b % $a = $remainder<br>";

// Exponentiation (PHP 5.6+)
$power = $a ** 2; // Calculates $a raised to the power of 2
echo "Exponentiation: $a ** 2 = $power<br><br>";

// 2. Comparison Operators
echo "Comparison Operators Demonstration:<br>";

// Equal
$isEqual = ($a == $b); // Checks if $a is equal to $b
echo "Equal (==): $a == $b is " . ($isEqual ? "true" : "false") . "<br>";

// Identical
$isIdentical = ($a === $b); // Checks if $a is identical (equal and same type) to $b
echo "Identical (===): $a === $b is " . ($isIdentical ? "true" : "false") . "<br>";

// Not Equal
$isNotEqual = ($a != $b); // Checks if $a is not equal to $b
echo "Not Equal (!=): $a != $b is " . ($isNotEqual ? "true" : "false") . "<br>";

// Not Identical
$isNotIdentical = ($a !== $b); // Checks if $a is not identical to $b
echo "Not Identical (!==): $a !== $b is " . ($isNotIdentical ? "true" : "false") . "<br>";

// Greater Than
$isGreaterThan = ($b > $a); // Checks if $b is greater than $a
echo "Greater Than (>): $b > $a is " . ($isGreaterThan ? "true" : "false") . "<br>";

// Less Than
$isLessThan = ($a < $b); // Checks if $a is less than $b
echo "Less Than (<): $a < $b is " . ($isLessThan ? "true" : "false") . "<br>";

// Greater Than or Equal To
$isGreaterThanOrEqual = ($a >= 10); // Checks if $a is greater than or equal to 10
echo "Greater Than or Equal To (>=): $a >= 10 is " . ($isGreaterThanOrEqual ? "true" : "false") . "<br>";

// Less Than or Equal To
$isLessThanOrEqual = ($a <= 5); // Checks if $a is less than or equal to 5
echo "Less Than or Equal To (<=): $a <= 5 is " . ($isLessThanOrEqual ? "true" : "false") . "<br><br>";

// 3. Logical Operators
echo "Logical Operators Demonstration:<br>";

$condition1 = ($a < $b); // $a is less than $b
$condition2 = ($b > 15); // $b is greater than 15

// AND (&&)
$andResult = $condition1 && $condition2; // True if both conditions are true
echo "AND (&&): ($a < $b) && ($b > 15) is " . ($andResult ? "true" : "false") . "<br>";

// OR (||)
$orResult = $condition1 || ($b < 10); // True if at least one condition is true
echo "OR (||): ($a < $b) || ($b < 10) is " . ($orResult ? "true" : "false") . "<br>";

// NOT (!)
$notResult = !$condition1; // True if $condition1 is false
echo "NOT (!): !($a < $b) is " . ($notResult ? "true" : "false") . "<br>";

// XOR (^)
$xorResult = $condition1 ^ $condition2; // True if exactly one of the conditions is true
echo "XOR (^): ($a < $b) XOR ($b > 15) is " . ($xorResult ? "true" : "false") . "<br>";
?>
