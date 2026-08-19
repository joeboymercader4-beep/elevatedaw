<?php
include 'db.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mag-query sa database para suriin kung umiiral ang user
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $message = " Login Successful! Welcome, " . $username;
    } else {
        $message = " Mali ang Username o Password!";
    }
}
?>
