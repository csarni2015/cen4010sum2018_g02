<?php
$servername = "localhost";
$username = "cen4010sum18_g02";
$password = "group2";
$DBname = "cen4010sum18_g02";

// Create connection
$conn = new mysqli($servername, $username, $password, $DBname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>