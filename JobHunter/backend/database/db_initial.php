<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS job_headhunter_app";
if ($conn->query($sql) === TRUE) {
  echo "Database created/loaded successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

?>