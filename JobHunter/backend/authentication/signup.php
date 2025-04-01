<?php
// Database connection details (replace with your actual credentials)

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_headhunter_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errorMessage = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pass = $_POST["password"];
    $email = $_POST["email"];

    // Basic input validation (add more robust validation as needed)
    if (empty($username) || empty($pass) || empty($email)) {
        $errorMessage = "Please fill in all fields.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 12]);

        // Use prepared statements to prevent SQL injection
        $sql = "INSERT INTO USER (username, password, email, registrationDate, groupID) VALUES (?, ?, ?, NOW(), 'user')"; // You might need to adjust the default group ID
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $hashedPassword, $email);

        if ($stmt->execute()) {
            $successMessage = "Signup successful! You can now log in.";
        } else {
            $errorMessage = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: calc(100% - 12px);
            padding: 6px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error-message, .success-message {
            text-align: center;
            margin-bottom: 10px;
        }

        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }
        .login-link{
            text-align: center;
            padding-top: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Sign Up</h2>

        <?php if ($errorMessage): ?>
            <div class="error-message"><?php echo $errorMessage; ?></div>
        <?php endif; ?>

        <?php if ($successMessage): ?>
            <div class="success-message"><?php echo $successMessage; ?></div>
        <?php endif; ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>

            <input type="submit" value="Sign Up">
        </form>
        <div class="login-link">
            <a href="login.php">Log In</a>
        </div>
    </div>


</body>
</html>