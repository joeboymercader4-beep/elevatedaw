<?php
header("Content-Type: application/json");
require 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $stmt = $conn->prepare("INSERT INTO members (alias, role, tier, avatar, bio, social_fb, social_tiktok, social_youtube, music_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "sssssssss", 
        $data['alias'], 
        $data['role'], 
        $data['tier'], 
        $data['avatar'], 
        $data['bio'], 
        $data['social_fb'], 
        $data['social_tiktok'], 
        $data['social_youtube'], 
        $data['music_url']
    );

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "id" => $stmt->insert_id]);
    } else {
        echo json_encode(["status" => "error", "message" => $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid Input"]);
}

$conn->close();
?>