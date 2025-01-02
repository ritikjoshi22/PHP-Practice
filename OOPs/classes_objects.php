<?php
// Definition: Classes are blueprints for creating objects. Objects are instances of classes.

class Car {
    // Properties (variables inside a class)
    public $brand;
    public $color;

    // Methods (functions inside a class)
    public function drive() {
        echo "The car is driving.<br>";
    }
}

// Creating an object
$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "Red";

// Accessing properties and methods
echo "Brand: " . $myCar->brand . "<br>";
echo "Color: " . $myCar->color . "<br>";
$myCar->drive();
?>
