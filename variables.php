<?php
// Variable types can be
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables
$name = "Zura";

// echo the variable
echo $name ;

// Print types of the variable
echo gettype($name);

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = false;

// Variable Type checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
var_dump(isset($name));

// Constants define and call
define('PI', 3.14);
echo PI.'<br>';

// 12. Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
