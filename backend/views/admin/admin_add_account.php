<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job_headhunter_app";

$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$type = $_POST['type'];
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT IGNORE INTO USER (username, password, email, registrationDate, groupID) VALUES 
    (?, ?, ?, NOW(), ?)";
$hashedPass = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 12]);
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $user, $hashedPass, $email, $type);
if ($stmt->execute()) {
    echo "New admin added successfully.";
} else {
    echo "Error adding new admin: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>