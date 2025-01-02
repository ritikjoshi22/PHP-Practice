<?php
// Definition: Properties are variables inside a class, and methods are functions inside a class.

class Dog {
    public $name;
    public $breed;

    // Method to set properties
    public function setDetails($name, $breed) {
        $this->name = $name;
        $this->breed = $breed;
    }

    // Method to display properties
    public function getDetails() {
        echo "Name: " . $this->name . "<br>";
        echo "Breed: " . $this->breed . "<br>";
    }
}

// Creating an object and using methods
$dog = new Dog();
$dog->setDetails("Buddy", "Golden Retriever");
$dog->getDetails();
?>
