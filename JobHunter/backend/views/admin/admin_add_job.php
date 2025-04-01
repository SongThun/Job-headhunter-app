<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job_headhunter_app";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$company_id = $_POST['company_id'];
$position_id = $_POST['position_id'];
$title = $_POST['title'];
$des = $_POST['des'];
$location = $_POST['location'];
$amount = $_POST['amount'];
$salary = $_POST['salary'];
$jobDescPDF = $_POST['jobDecsPDF'];

$sql = "INSERT IGNORE INTO JOB_POST (companyID, positionID, title, description, location, candidateAmount, salary, jobDescPDF, postDate, status) VALUES 
    (?, ?, ?, ?, ?, ?, ?, ?, NOW(), 'approved')";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issssiss", $company_id, $position_id, $title, $des, $location, $amount, $salary, $jobDescPDF);
if ($stmt->execute()) {
    echo "New job post added successfully.";
} else {
    echo "Error adding new job post: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>