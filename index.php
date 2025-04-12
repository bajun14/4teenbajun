<?php
session_start();

// If user is already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome to Our Website</h2>
    <p>Click below to login using your phone number:</p>
    <a href="login.php"><button>Login with OTP</button></a>
</body>
</html>
