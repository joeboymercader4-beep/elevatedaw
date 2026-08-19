<?php
$host = "localhost";
$user = "root";
$pass = ""; // Blank lang kapag default XAMPP
$dbname = "elevate_db"; // Palitan ito ng pangalan ng ginawa mong database

// Gumawa ng connection gamit ang mysqli
$conn = new mysqli($host, $user, $pass, $dbname);

// Suriin kung nakakonekta
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>