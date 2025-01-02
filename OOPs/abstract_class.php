<?php
// Definition: 
// - Abstract classes can have both abstract (unimplemented) and concrete (implemented) methods.
// - They provide a base for other classes to build upon.

// Abstract class
abstract class Animal {
    // Abstract method (no implementation)
    abstract public function makeSound();

    // Concrete method (with implementation)
    public function eat() {
        echo "This animal is eating.<br>";
    }
}

// Class extending the abstract class
class Dog extends Animal {
    // Implementing the abstract method
    public function makeSound() {
        echo "Dog says: Woof Woof!<br>";
    }
}

// Class extending the abstract class
class Cat extends Animal {
    // Implementing the abstract method
    public function makeSound() {
        echo "Cat says: Meow Meow!<br>";
    }
}

// Create an instance of Dog
$dog = new Dog();
$dog->makeSound(); // Calls the implemented method
$dog->eat();       // Calls the inherited method

// Create an instance of Cat
$cat = new Cat();
$cat->makeSound(); // Calls the implemented method
$cat->eat();       // Calls the inherited method
?>
