<?php
// Definition: Access modifiers control the visibility of properties and methods.
// - public: Accessible everywhere
// - private: Accessible only within the class
// - protected: Accessible within the class and its subclasses

class Person {
    public $name; // Public: Can be accessed from anywhere
    private $age; // Private: Only accessible within the class

    public function setAge($age) {
        $this->age = $age; // Setting private property
    }

    public function getAge() {
        return $this->age; // Accessing private property
    }
}

$person = new Person();
$person->name = "John";
$person->setAge(30);

echo "Name: " . $person->name . "<br>";
echo "Age: " . $person->getAge() . "<br>";
?>