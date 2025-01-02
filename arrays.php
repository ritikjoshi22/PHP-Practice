<?php
// PHP Script to Demonstrate Arrays in PHP

echo "PHP Arrays Demonstration:<br><br>";

// 1. Indexed Arrays
echo "1. Indexed Arrays:<br>";
$fruits = ["Apple", "Banana", "Cherry"]; // Defining an indexed array

// Accessing and displaying elements
echo "First Fruit: " . $fruits[0] . "<br>";
echo "Second Fruit: " . $fruits[1] . "<br>";

// Adding a new element
$fruits[] = "Orange"; // Add to the end of the array
echo "Added Fruit: " . $fruits[3] . "<br>";

echo "<br>";

// 2. Associative Arrays
echo "2. Associative Arrays:<br>";
$person = [
    "name" => "John",
    "age" => 25,
    "city" => "New York"
]; // Defining an associative array

// Accessing elements by key
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";
echo "City: " . $person["city"] . "<br>";

// Adding a new key-value pair
$person["country"] = "USA";
echo "Country: " . $person["country"] . "<br>";

echo "<br>";

// 3. Multidimensional Arrays
echo "3. Multidimensional Arrays:<br>";
$students = [
    ["Alice", 85, "Math"],
    ["Bob", 78, "Science"],
    ["Charlie", 92, "History"]
]; // Defining a multidimensional array

// Accessing elements
echo "Student 1 Name: " . $students[0][0] . ", Score: " . $students[0][1] . ", Subject: " . $students[0][2] . "<br>";
echo "Student 2 Name: " . $students[1][0] . ", Score: " . $students[1][1] . ", Subject: " . $students[1][2] . "<br>";

echo "<br>";

// 4. Array Functions
echo "4. Array Functions:<br>";

// Example: array_push
$colors = ["Red", "Green"];
array_push($colors, "Blue", "Yellow"); // Adding elements to the array
echo "Colors after array_push: " . implode(", ", $colors) . "<br>";

// Example: array_pop
$colors = ["Red", "Green"];
array_pop($colors); // Adding elements to the array
echo "Colors after array_pop: " . implode(", ", $colors) . "<br>";

// Example: array_shift
$colors = ["Red", "Green"];
array_shift($colors); // Adding elements to the array
echo "Colors after array_shift: " . implode(", ", $colors) . "<br>";

// Example: array_merge
$moreColors = ["Purple", "Orange"];
$mergedColors = array_merge($colors, $moreColors); // Merging arrays
echo "Merged Colors: " . implode(", ", $mergedColors) . "<br>";

// Example: in_array
$searchColor = "Blue";
if (in_array($searchColor, $mergedColors)) {
    echo "$searchColor is in the array.<br>";
} else {
    echo "$searchColor is not in the array.<br>";
}

?>
