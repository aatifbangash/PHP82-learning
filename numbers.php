<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;

// Increment operator and Decrement operator
echo $a++;
echo ++$a;
echo $a--;
echo --$a;

// 7. Number checking functions
is_float(1.25); // true
is_integer(3.4); // false
is_numeric("3.45"); // true
is_numeric("3g.45"); // true

// 7. Conversion or type casting
$strNumber = '12.34';
$number = (float)$strNumber; // 8. Use floatval(), (int), intval()
var_dump($number);

// 9. Number functions
echo "abs(-15) " . abs(-15);
echo "pow(2,  3) " . pow(2, 3);
echo "sqrt(16) " . sqrt(16);
echo "max(2, 3) " . max(2, 3);
echo "min(2, 3) " . min(2, 3);
echo "round(2.4) " . round(2.4);
echo "round(2.6) " . round(2.6);
echo "floor(2.6) " . floor(2.6);
echo "ceil(2.4) " . ceil(2.4);

// 10. Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',');
