<?php
// PHP Script to Demonstrate Loops: for, foreach, while, and do-while

echo "Loops Demonstration:<br><br>";

// 1. FOR Loop
echo "FOR Loop:<br>";

// Example: Print numbers from 1 to 5
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}

echo "<br>";

// 2. FOREACH Loop
echo "FOREACH Loop:<br>";

// Example: Iterating through an array
$fruits = ["Apple", "Banana", "Cherry", "Date"];

// Iterate through each fruit in the array
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}

// Associative array example
$person = [
    "name" => "John Doe",
    "age" => 25,
    "profession" => "Developer"
];

echo "<br>Iterating over an associative array:<br>";
foreach ($person as $key => $value) {
    echo ucfirst($key) . ": $value<br>";
}

echo "<br>";

// 3. WHILE Loop
echo "WHILE Loop:<br>";

$counter = 1;

// Example: Print numbers from 1 to 5 using a while loop
while ($counter <= 5) {
    echo "Counter: $counter<br>";
    $counter++; // Increment the counter
}

echo "<br>";

// 4. DO-WHILE Loop
echo "DO-WHILE Loop:<br>";

$counter = 1;

// Example: Print numbers from 1 to 5 using a do-while loop
do {
    echo "Counter: $counter<br>";
    $counter++; // Increment the counter
} while ($counter <= 5);

echo "<br>";

// Edge Case Example: DO-WHILE executes at least once
echo "DO-WHILE Edge Case:<br>";

$counter = 10; // Set counter to a value greater than 5

do {
    echo "This will execute at least once, Counter: $counter<br>";
} while ($counter <= 5);

echo "<br>";

// Bonus Example: NESTED LOOPS
echo "Nested FOR Loops (Multiplication Table):<br>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        $result = $i * $j;
        echo "$i x $j = $result<br>";
    }
    echo "<br>"; // Newline after each row
}

// PHP Script to Demonstrate Break and Continue in Loops

echo "Demonstration of Break and Continue in Loops:<br><br>";

// 1. BREAK Statement in a FOR Loop
echo "BREAK Statement:<br>";

// Example: Stop the loop when the number reaches 5
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Loop stopped at: $i<br>";
        break; // Exit the loop when $i equals 5
    }
    echo "Number: $i<br>";
}

echo "<br>";

// 2. CONTINUE Statement in a FOR Loop
echo "CONTINUE Statement:<br>";

// Example: Skip printing the number 5
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "Skipping number: $i<br>";
        continue; // Skip the current iteration when $i equals 5
    }
    echo "Number: $i<br>";
}

echo "<br>";

// 3. BREAK in a WHILE Loop
echo "BREAK in WHILE Loop:<br>";

$counter = 1;

while ($counter <= 10) {
    if ($counter == 5) {
        echo "Loop stopped at: $counter<br>";
        break; // Exit the loop when $counter equals 5
    }
    echo "Counter: $counter<br>";
    $counter++;
}

echo "<br>";

// 4. CONTINUE in a WHILE Loop
echo "CONTINUE in WHILE Loop:<br>";

$counter = 1;

while ($counter <= 10) {
    if ($counter == 5) {
        echo "Skipping counter: $counter<br>";
        $counter++;
        continue; // Skip the current iteration when $counter equals 5
    }
    echo "Counter: $counter<br>";
    $counter++;
}

echo "<br>";

?>
