<?php
header("Content-Type: application/json");
require 'db.php';

$sql = "SELECT * FROM members ORDER BY id DESC";
$result = $conn->query($sql);

$members = [];
while ($row = $result->fetch_assoc()) {
    $members[] = $row;
}

echo json_encode($members);
$conn->close();
?>