<?php

// Create array
$persons = ["Atif", "Asif", "Ali"];

// Print the whole array
var_dump($persons);
print_r($persons);

// Get element by index
echo $persons[1];

// Set element by index
$persons[0] = "Aslam";

// Append element
$persons[] = 'Aslam';
echo $persons[3];

// Print the length of the array
echo count($persons);

// Add element at the end of the array
array_push($persons, 'Foo');
// Remove element from the end of the array
array_pop($persons);

// Add element at the beginning of the array
array_unshift($persons, 'Apple');
// Remove element from the beginning of the array
array_shift($persons);

// Split the string into an array
$string = "Atif,Asif,Ali";
var_dump(explode(",", $string));

// Combine array elements into string
echo implode(",", $persons);

// Check if element exist in the array
var_dump(in_array('Raza', $persons));

// Search element index in the array
var_dump(array_search("Raza", $persons));

// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
var_dump(array_merge($persons, $vegetables));
var_dump([...$persons, ...$vegetables]); //  >=PHP 7.4

// Sorting of array (Reverse order also)
sort($persons); //sort, rsort, usort
var_dump($persons);

// Filter, map, reduce of array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$evens = array_filter($numbers, function ($n) { // fn($n) => $n % 2 === 0
    return $n % 2 === 0;
});
var_dump($evens);

$squares = array_map(fn($n) => $n + 1, $numbers);
var_dump($squares);

$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item);
echo $sum;

// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Atif',
    'surname' => 'Ali',
    'age' => 30,
    'hobbies' => ['Football', 'Video Games'],
];
// Get element by key
echo $person['name'];

// Set element by key
$person['channel'] = 'MyYoutube';

// Check if array has specific key
var_dump(isset($person['age'])); // Change age into "location"

// Print the keys of the array
var_dump(array_keys($person));

// Print the values of the array
var_dump(array_values($person));

// Sorting associative arrays by values, by keys
ksort($person); // ksort, krsort, asort, arsort
var_dump($person);


// Two dimensional arrays
$todoItems = [
    ['title' => 'Todo1', 'completed' => true],
    ['title' => 'Todo2', 'completed' => false],
];

var_dump($todoItems);