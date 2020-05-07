<?php
session_start();
// all the database connection would go here
$host = 'localhost';
$password = 'admin';
$user = 'root';
$db = 'rishtey';

$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// start the session

?>