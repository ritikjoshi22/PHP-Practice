<?php
// PHP Script to Demonstrate Conditional Statements: if, else, and switch

echo "Conditional Statements Demonstration:<br><br>";

// 1. IF Statement
echo "IF Statement:<br>";

$age = 20;

// Check if the person is an adult
if ($age >= 18) {
    echo "The person is an adult. Age: $age<br>";
}
echo "<br>";

// 2. IF-ELSE Statement
echo "IF-ELSE Statement:<br>";

$temperature = 15; // Temperature in degrees Celsius

if ($temperature > 25) {
    echo "It's a warm day. Temperature: $temperature °C<br>";
} else {
    echo "It's a cold day. Temperature: $temperature °C<br>";
}
echo "<br>";

// 3. IF-ELSEIF-ELSE Statement
echo "IF-ELSEIF-ELSE Statement:<br>";

$marks = 85;

// Check grade based on marks
if ($marks >= 90) {
    echo "Grade: A<br>";
} elseif ($marks >= 75) {
    echo "Grade: B<br>";
} elseif ($marks >= 50) {
    echo "Grade: C<br>";
} else {
    echo "Grade: F<br>";
}
echo "<br>";

// 4. Nested IF Statement
echo "Nested IF Statement:<br>";

$number = 0;

// Check if number is positive, negative, or zero
if ($number >= 0) {
    if ($number == 0) {
        echo "The number is zero.<br>";
    } else {
        echo "The number is positive.<br>";
    }
} else {
    echo "The number is negative.<br>";
}
echo "<br>";

// 5. SWITCH Statement
echo "SWITCH Statement:<br>";

$day = 3; // Representing the day of the week (1 = Monday, ..., 7 = Sunday)

// Determine the day of the week
switch ($day) {
    case 1:
        echo "The day is Monday.<br>";
        break;
    case 2:
        echo "The day is Tuesday.<br>";
        break;
    case 3:
        echo "The day is Wednesday.<br>";
        break;
    case 4:
        echo "The day is Thursday.<br>";
        break;
    case 5:
        echo "The day is Friday.<br>";
        break;
    case 6:
        echo "The day is Saturday.<br>";
        break;
    case 7:
        echo "The day is Sunday.<br>";
        break;
    default:
        echo "Invalid day number.<br>";
        break;
}
echo "<br>";

// 6. Ternary Operator (Alternative for if-else in one line)
echo "Ternary Operator:<br>";

$score = 70;
$result = ($score >= 50) ? "Pass" : "Fail";
echo "Score: $score - Result: $result<br>";
?>
