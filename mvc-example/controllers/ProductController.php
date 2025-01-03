<?php
// Controller: Handles user input and connects Model with View
require_once __DIR__ . '/../models/Product.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new Product(); // Initialize the model
    }

    // Function to display product list
    public function showProductList() {
        $products = $this->model->getAllProducts(); // Get products from the model
        require_once __DIR__ . '/../views/product-list.php'; // Pass data to the view
    }
}
?>
