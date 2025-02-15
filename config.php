<?php

$server = "localhost";
$username = "root";
$password = ""; // Make sure this matches your MySQL password
$database = "bluebirdhotel";

// Establish a connection to the MySQL database
$conn = mysqli_connect($server, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    // Output a detailed error message
    die("<script>alert('Connection failed: " . mysqli_connect_error() . "');</script>");
}

?>
