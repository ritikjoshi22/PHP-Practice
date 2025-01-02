<?php
/*
PHP Constants
    A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
    A valid constant name starts with a letter or underscore (no $ sign before the constant name).
    Note: Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant
    To create a constant, use the define() function.
    Syntax: define(name, value);
*/

define("GREETING", "Welcome to ritik github!");
echo GREETING;

?>