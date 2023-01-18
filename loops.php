<?php

// while
while (true) { // Infinite loop: DON'T run this
    // Do something constantly
}

// Loop with $counter
// Add $runLoop variable to above loop
$counter = 0;
while ($counter < 10) {
    echo "Printing counter: $counter<br>";
    if ($counter > 5) break;

    if ($counter > 10) {
        $runLoop = false;
    }
    $counter++;
}

// do - while
$counter = 0; // When counter is 10?
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo "Printing counter: $i<br>";
}

// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
}

// Foreach Iterate Over associative array.
$person = [
    'name' => 'Atif',
    'surname' => 'Ali',
    'age' => 30,
    'hobbies' => ['Footbal', 'Video Games'],
];
foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        break;
    }
    echo $key . ' ' . $value . '<br>';
}
