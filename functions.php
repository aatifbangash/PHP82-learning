<?php

// Function
function hello()
{
    echo 'Hello I am TheCodeholic<br>';
}

hello();

// function with param
function sum($a, $b)
{
    echo ($a + $b);
}
sum(4,5);

// Create function with rest operator ...$nums
function sumAll(...$nums)
{
   $sum = 0;
   foreach ($nums as $num) $sum += $num;
   return $sum;
}
echo sumAll(1, 2, 3, 4, 6);

//  Arrow functions
array_reduce($nums, fn($coll, $n) => $coll + $n);

// Annonumous function
$id;
$fn = function($num) use($id) {
    return "result";
}


