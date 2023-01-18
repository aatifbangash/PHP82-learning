<?php
// Magic constants
// current file
echo __FILE__;

// current file dir
echo __DIR__;

// Create directory
mkdir('test');

// Rename directory
rename('test', 'test2');

// Delete directory
rmdir('test');

// Read files and folders inside directory
$files = scandir('./');

// file_get_contents, file_put_contents
$content = file_get_contents('file.txt');
file_put_contents('file.txt', "First line" . PHP_EOL . $content);

// file_get_contents from URL
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($jsonContent);

// Check if file exists or not
file_exists('file.txt'); // true

// Get file size
filesize('file.txt');

// Delete file
unlink('file.txt');

// https://www.php.net/manual/en/book.filesystem.php
