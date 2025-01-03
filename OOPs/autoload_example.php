<?php

/*
    Autoloading in PHP allows you to automatically load classes or interfaces without needing to manually include or require their files. This is especially useful in large projects where you might have multiple classes in separate files.

    The spl_autoload_register() function is used to register a custom autoload function. Whenever a class is instantiated, this function is triggered to locate and include the required class file.
*/  

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
