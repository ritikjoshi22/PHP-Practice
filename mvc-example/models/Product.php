<?php
// Model: Handles data and logic
class Product {
    private $products = [
        ["id" => 1, "name" => "Laptop", "price" => 800],
        ["id" => 2, "name" => "Smartphone", "price" => 500],
        ["id" => 3, "name" => "Tablet", "price" => 300]
    ];

    // Function to fetch all products
    public function getAllProducts() {
        return $this->products;
    }
}
?>
