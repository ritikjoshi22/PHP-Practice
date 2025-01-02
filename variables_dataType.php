<?php
    // variable = a reusable container that holds data
    //                   string, integer, float, boolean
   
    $name = "Bro";
    $food = "pizza";
    $email = "fake123@gmail.com";

    $age = 21;
    $users = 2;
    $quantity = 3;

    $gpa = 2.5;
    $price = 4.99;
    $tax = 5.1;

    $student = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo"You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;
    echo"Your total is \${$total} <br>";
?>