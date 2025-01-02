<?php
// Definition: 
// - Inheritance allows a class to inherit properties and methods from another class.
// - The child class can reuse the functionality of the parent class and also define its own.

// Parent class
class Vehicle {
    public $brand;

    public function start() {
        echo "The vehicle is starting.<br>";
    }
}

// Child class
class Car extends Vehicle {
    public $model;

    public function displayDetails() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
    }
}

// Creating an object of the child class
$myCar = new Car();
$myCar->brand = "Toyota"; // Setting inherited property
$myCar->model = "Corolla"; // Setting child class property

$myCar->start(); // Calling inherited method
$myCar->displayDetails(); // Calling child class method
?>
