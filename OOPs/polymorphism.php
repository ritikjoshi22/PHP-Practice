<?php
// Definition:
// - Polymorphism allows child classes to override the methods of the parent class, providing their own implementation.

// Parent class
class Animal {
    public function sound() {
        echo "Animals make sounds.<br>";
    }
}

// Child class 1
class Dog extends Animal {
    public function sound() {
        echo "Dogs bark.<br>";
    }
}

// Child class 2
class Cat extends Animal {
    public function sound() {
        echo "Cats meow.<br>";
    }
}

// Using polymorphism
$animal = new Animal();
$animal->sound(); // Calls the method in the Animal class

$dog = new Dog();
$dog->sound(); // Calls the overridden method in the Dog class

$cat = new Cat();
$cat->sound(); // Calls the overridden method in the Cat class
?>
