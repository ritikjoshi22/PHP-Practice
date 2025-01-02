<?php
// Definition: 
// - Interfaces define methods that must be implemented in any class that uses the interface.
// - An interface provides a blueprint for classes without defining any implementation details.

interface Shape {
    // Define a method that must be implemented in classes
    public function calculateArea();
}

// Class implementing the Shape interface
class Circle implements Shape {
    public $radius;

    // Constructor to initialize the radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementing the calculateArea() method from the Shape interface
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Square implements Shape {
    public $side;

    // Constructor to initialize the side
    public function __construct($side) {
        $this->side = $side;
    }

    // Implementing the calculateArea() method from the Shape interface
    public function calculateArea() {
        return $this->side * $this->side;
    }
}

// Create an instance of Circle
$circle = new Circle(7);
echo "Area of Circle: " . $circle->calculateArea() . "<br>";

// Create an instance of Square
$square = new Square(4);
echo "Area of Square: " . $square->calculateArea() . "<br>";
?>
