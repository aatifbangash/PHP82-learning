<?php
// ALL Super GLOBALS
// server super global
var_dump($_SERVER);

// to API GET METHOD data
var_dump($_GET);

// to API POST METHOD data
var_dump($_POST);

// to API REQUEST data
var_dump($_REQUEST);

// Using session
session_start();
echo session_id();
$_SESSION['page_count'] = $_SESSION['page_count'] ?? 0;
$_SESSION['page_count']++;
session_unset();
session_destroy();

// Using cookies
setcookie('name', 'TheCodeholic', time() + 60);


// Using $_FILES super global to upload files
// Add enctype="multipart/form-data" to form
var_dump($_FILES);
//Get the file extension
$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
