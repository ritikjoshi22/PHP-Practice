<?php
// Definition: 
// - Constructors are special methods automatically called when an object is created.
// - Destructors are automatically called when an object is destroyed.

class Book {
    public $title;

    // Constructor
    public function __construct($title) {
        $this->title = $title;
        echo "A new book titled '{$this->title}' has been created.<br>";
    }

    // Destructor
    public function __destruct() {
        echo "The book titled '{$this->title}' is being destroyed.<br>";
    }
}

$book = new Book("Harry Potter");
?>
