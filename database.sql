-- Create Database
CREATE DATABASE IF NOT EXISTS my_database;
USE my_database;

-- Create Table Example
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Sample Data
INSERT INTO users (username, password) 
VALUES ('admin', 'admin123');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    $stmt = $conn->prepare("INSERT INTO users (username) VALUES (?)");
    $stmt->bind_param("s", $username);

    if ($stmt->execute()) {
        $msg = "Matagumpay na naisave ang user!";
    } else {
        $msg = "Error: " . $stmt->error;
    }
    $stmt->close();
}