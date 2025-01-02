<?php
// Definition: 
// - Static properties and methods belong to the class itself rather than any instance of the class.
// - They can be accessed using the `ClassName::` syntax without creating an object.

// Define a class for mathematical operations
class MathHelper {
    // Static property to hold the value of Pi
    public static $pi = 3.14159;

    // Static method to calculate the area of a circle
    public static function calculateCircleArea($radius) {
        // Using the static property $pi within the class
        return self::$pi * $radius * $radius;
    }

    // Static method to calculate the circumference of a circle
    public static function calculateCircleCircumference($radius) {
        // Using the static property $pi within the class
        return 2 * self::$pi * $radius;
    }
}

// Accessing the static property directly from the class (no object needed)
echo "Value of Pi: " . MathHelper::$pi . "<br>"; // Output the value of the static property

// Calling the static method to calculate the area of a circle
$circleArea = MathHelper::calculateCircleArea(5); // Pass the radius as 5
echo "Area of Circle with radius 5: " . $circleArea . "<br>"; // Output the calculated area

// Calling the static method to calculate the circumference of a circle
$circleCircumference = MathHelper::calculateCircleCircumference(5); // Pass the radius as 5
echo "Circumference of Circle with radius 5: " . $circleCircumference . "<br>"; // Output the calculated circumference
?>
