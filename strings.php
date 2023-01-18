<?php

// Create string
$string = "Hello TheCodeholic";

// String concatenation
echo "Hello " . " World";

// String useful functions
echo strlen($string) . PHP_EOL;
echo trim($string) . PHP_EOL;
echo ltrim($string) . PHP_EOL;
echo rtrim($string) . PHP_EOL;
echo str_word_count($string) . PHP_EOL;
echo strrev($string) . PHP_EOL;
echo strtoupper($string) . PHP_EOL;
echo strtolower($string) . PHP_EOL;
echo ucfirst('hello') . PHP_EOL;
echo lcfirst('HELLO') . PHP_EOL;
echo ucwords('hello world') . PHP_EOL;
echo strpos($string, 'world') . PHP_EOL; // 5. Change into world
echo stripos($string, 'world') . PHP_EOL;
echo substr($string, 8) . PHP_EOL;
echo str_replace('World', 'PHP', $string) . PHP_EOL;
echo str_ireplace('world', 'PHP', $string) . PHP_EOL;

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . PHP_EOL;
echo str_repeat('Hello', 2) . PHP_EOL;

// 6. Multiline text and line breaks
$longText = "
  Hello, my name is test
  I am test
";
echo nl2br($longText) . PHP_EOL;

// 7. Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";
echo $longText;
echo nl2br($longText);
echo htmlentities($longText) . PHP_EOL;
echo nl2br(htmlentities($longText)) . PHP_EOL;
echo html_entity_decode(htmlentities($longText)) . PHP_EOL;
echo htmlspecialchars($longText) . PHP_EOL;
