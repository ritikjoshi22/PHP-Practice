<?php
// Definition: 
// - Routing is the process of directing HTTP requests to specific pieces of code based on the requested URL.
// - It is an essential concept in web applications, especially in frameworks like Laravel, where routes define how URLs map to controllers and methods.
// - Basic routing can be implemented using simple `if-else` or `switch` statements in plain PHP.

// Example: A simple router
$uri = $_SERVER['REQUEST_URI'];

if($uri === '/'){
    require 'views/index.php';
}else if($uri === '/contact'){
    require 'views/contact.php';
}else if($uri === '/users'){
    require 'views/users.php';
}
else{
    require 'views/404.php';
}


// Explanation of the code:
// 1. `$_SERVER['REQUEST_URI']`: Retrieves the URI of the current request (e.g., "/about").
// 2. The `switch` statement checks the value of `$requestUri`.
// 3. For each case (e.g., '/', '/about', '/contact'), it loads and displays specific content.
// 4. The `default` case handles undefined routes, showing a 404 error message.

// Note: For this to work properly on localhost (e.g., using XAMPP), make sure the requested URI matches the cases defined above.
// Example: http://localhost/home, http://localhost/about, etc.
?>
