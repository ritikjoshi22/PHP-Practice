<?php
// Definition:
// - Namespaces are a way to organize code by grouping related classes, interfaces, functions, or constants together.
// - They help avoid naming conflicts when using multiple libraries or large-scale applications.

// Define the first namespace
namespace Animals{

// Define a class inside the Animals namespace
class Dog {
    public function sound() {
        return "Dogs bark.<br>";
    }
}
}

// Define another namespace
namespace Vehicles{

// Define a class inside the Vehicles namespace
class Car {
    public function sound() {
        return "Cars honk.<br>";
    }
}
}

// Back to the global namespace
namespace{

// Importing the specific classes from the namespaces
use Animals\Dog;
use Vehicles\Car;

// Create an object of the Dog class from the Animals namespace
$dog = new Dog();
echo $dog->sound(); // Outputs: Dogs bark.

// Create an object of the Car class from the Vehicles namespace
$car = new Car();
echo $car->sound(); // Outputs: Cars honk.
}


//Modified Example (Namespace Conflicts)
namespace LibraryA{
    class Logger {
        public function log($message) {
            echo "LibraryA Logger: $message<br>";
        }
    }
}

namespace LibraryB{
    class Logger {
        public function log($message) {
            echo "LibraryB Logger: $message<br>";
        }
    }
}

// Back to the global namespace
namespace{

use LibraryA\Logger as LoggerA;
use LibraryB\Logger as LoggerB;

// Create an object of the Logger class from LibraryA
$loggerA = new LoggerA();
$loggerA->log("This is from LibraryA."); // Outputs: LibraryA Logger: This is from LibraryA.

// Create an object of the Logger class from LibraryB
$loggerB = new LoggerB();
$loggerB->log("This is from LibraryB."); // Outputs: LibraryB Logger: This is from LibraryB.
}
?>