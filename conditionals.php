<?php

$age = 20;
$salary = 300000;

// conditon operators
// AND (&&), OR (||), NOT (!)
// >, <, ==, ===, !, !=, >=, <= 

//// if condition
if ($age < 22) {
   echo 'You are young man!!<br>';
} elseif ($age > 22) {
    echo 'You are not young man!!<br>';
} else {
    echo 'You are man';
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Nested ternary
echo $age < 22 ? ($age < 16 ? 'Too young' : 'Young') : 'Old';

// Short ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"

// Null coalescing operator
$var = isset($name) ? $name : 'John';
$var = $name ?? 'John'; // Equivalent of above

// Null coalescing assignment operator. >=PHP 7.4
$person = [
    'name' => 'John'
];

if (!isset($person['name'])){
    $person['name'] = 'Anonymous';
}
//// OR 
$person['name'] ??= 'Anonymous';


// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}
