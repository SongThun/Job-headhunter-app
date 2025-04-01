<?php
// PHP code for processing the form (login method would go here)
// ... (You would add your database connection and login logic here) ...

// Example: Display an error message if needed
$errorMessage = "";
sleep(5);
if (isset($_COOKIE) && $_COOKIE['state']=='Logged In')
{
    header("Location: ../views/view_assign.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // In a real scenario, you'd check login credentials here.
    // For this example, we'll simulate an error.
    if ($_POST["username"] == "invalid") {
        $errorMessage = "Invalid username or password.";
    } else {
        // Successful login - you'd handle session and redirect here
        // For example:
        // session_start();
        // $_SESSION["username"] = $_POST["username"];
        // header("Location: dashboard.php");
        // exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        input[type="password"] {
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
            margin-bottom: 10px; /* Add margin */
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        .signup-link {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Login</h2>

        <?php
        if ($errorMessage) {
            echo '<div class="error-message">' . $errorMessage . '</div>';
        }
        ?>

        <form method="post" action="../views/view_assign.php">
            <label for="username">Username:</label>
            <?php
            echo '<input type="text" name="username" id="username" required><br>';
            ?>

            <label for="password">Password:</label>
            <?php
            echo '<input type="password" name="password" id="password" required><br>';
            ?>

            <?php
            echo '<input type="submit" value="Login">';
            ?>
        </form>

        <div class="signup-link">
            <a href="signup.php">Sign Up</a>
        </div>
    </div>

</body>
</html>