<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: text/plain');
$con = mysqli_connect("localhost", "root", "", "drinkdatabase");

// Handle CORS preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

// Attempt to establish a connection to the database
$con = mysqli_connect("localhost", "root", "", "drinkdatabase");

// Check if the connection was successful
if (!$con) {
    die("Could not connect to the database: " . mysqli_connect_error());
}

// If you reach this point, the connection is successful
echo "Connected to the database successfully";



?>