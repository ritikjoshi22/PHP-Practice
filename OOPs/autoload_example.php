<?php
// Autoload Example Using spl_autoload_register

// Step 1: Register a custom autoload function
spl_autoload_register(function ($className) {
    // Define the path where classes are stored
    $path = __DIR__ . '/classes/' . $className . '.php';

    // Check if the file exists before including it
    if (file_exists($path)) {
        include $path;
    } else {
        die("Class file for '$className' not found.");
    }
});

// Step 2: Instantiate classes without manually including their files
$dog = new Dog(); // Automatically loads classes/Dog.php
$dog->bark();

$cat = new Cat(); // Automatically loads classes/Cat.php
$cat->meow();
?>
