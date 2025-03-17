<?php 
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $useracc = $_POST['username'];
    $pass = $_POST['password'];
}
else {
    echo "Parameters not found.";
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_headhunter_app";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$log = "SELECT userID, groupID, password, companyID
    FROM USER
    WHERE username = ?";
$stmt = $conn->prepare($log);
$stmt->bind_param("s", $useracc);
$stmt->execute();
$res = $stmt->get_result();
if ($res->num_rows == 1)
{   
    $data = $res->fetch_assoc();
  
    if (password_verify($pass, $data['password'])) {
        $_SESSION['userID'] = $data['userID']; // example of setting user id
        $_SESSION['accountType'] = $data['groupID']; // example of setting account type
        $_SESSION['companyID'] = $data['companyID']; //example of setting company ID if applicable
    } else {
        echo "Invalid username or password.";
    }
}
else {
    echo "1";
    echo "Invalid username or password.";
}
$stmt->close();
$conn->close();

// Check the account type and display the appropriate view
if (isset($_SESSION['accountType'])) {
    $accountType = $_SESSION['accountType'];
    switch ($accountType) {
        case 'admin':
            // Display admin view (e.g., using include or require)
            header("Location: admin_dashboard.php");
            break;
        case 'company':
            // Display company view
            header("Location: company_dashboard.php");
            break;
        case 'user':
            // Display user view
            header("Location: user_dashboard.php");
            break;
        default:
            echo 'Invalid account type.';
            break;
    }
} else {
    header("Location: guest_dashboard.php");
}

?>