<?php

//The Model-View-Controller (MVC) is a design pattern used in software development for organizing code and separating concerns. This pattern makes applications modular, easier to maintain, and more scalable.

/*
    Understanding the MVC Architecture
1.Model:
    -Handles the business logic and data.
    -Interacts with the database or data source.
    -Provides data to the controller.

2.View:
    -Responsible for presenting data to the user (HTML/CSS).
    -Does not contain any business logic.

3.Controller:
    -Acts as a bridge between the Model and View.
    -Receives input from the user (via URL, forms, etc.) and processes it using the Model.
    -Passes processed data to the View for display.


Separation of Concerns in MVC
    -Model: Focuses on data and logic (e.g., CRUD operations with a database).
    -View: Focuses on the UI (e.g., displaying data in HTML format).
    -Controller: Coordinates the application by connecting the Model and View.

*/

// Entry Point: Routes requests to the appropriate controller
require_once __DIR__ . '/controllers/ProductController.php';

// Initialize the controller
$productController = new ProductController();

// Call the function to display the product list
$productController->showProductList();

/*
How It Works
1.Model (Product.php):
    -Holds the data (array of products in this case).
    -Provides a method to retrieve data (getAllProducts()).

2.Controller (ProductController.php):
    -Instantiates the Model (Product).
    -Fetches data from the Model.
    -Passes the data to the View.

3.View (product-list.php):
    -Receives data from the Controller.
    -Displays it as an HTML table.
    -Index (index.php):

Acts as the entry point for the application.
Instantiates the ProductController and calls the appropriate function to render the view.
*/

?>
