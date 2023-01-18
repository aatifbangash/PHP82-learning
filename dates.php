<?php

// Print current timestamp
echo time();

// Print current date
echo date('Y-m-d H:i:s');

// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24);

// Different format: https:// php.net/manual/en/function.date.php
echo date('F j Y, H:i:s');

// String to timestamp
echo strtotime('now');
echo strtotime('+1 day');
echo strtotime('+1 week');

// Parse date: https:// php.net/manual/en/function.date-parse.php
$dateString = '2020-02-06 12:45:35'; // lare date
$parsedDate = date_parse($dateString); // se date

// Parse date from format
// ps:// php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35'; // With non-default format
$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
