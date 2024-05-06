<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Your authentication logic goes here (e.g., validating against a database)
    // For demonstration purposes, let's assume a hardcoded email and password
    $valid_email = "user@example.com";
    $valid_password = "password";

    // Check if the provided credentials match the valid credentials
    if ($email === $valid_email && $password === $valid_password) {
        // Authentication successful
        // Start a session and store user data if needed
        session_start();
        $_SESSION['email'] = $email;
        
        // Redirect the user to a dashboard or homepage
        header("Location: dashboard.php");
        exit;
    } else {
        // Authentication failed
        $error = "Invalid email or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if(isset($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class
