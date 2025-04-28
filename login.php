<?php
// You can also start a PHP session here if needed
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - DAMIA</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-wrapper">
        <!-- Left side: Login container -->
        <div class="login-container">
            <h2>Login to DAMIA</h2>
            <form action="login_process.php" method="post">
                <select name="role" id="role" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="student">As Student</option>
                    <option value="faculty">As Faculty</option>
                    <option value="admin">As Admin</option>
                </select>

                <input type="text" name="username" id="username" placeholder="Email ID" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>
            <div class="links">
            <div class="links">
    <a href="role_selection.php">Don't have an account? Register here.</a>
</div>
            </div>
        </div>

        <!-- Right side: Welcome message directly on the page -->
        <div class="welcome-message">
            <h2>Welcome Back!</h2>
            <p>We are happy to see you again. Please log in to continue your journey with DAMIA.</p>
        </div>
    </div>

    <script>
        // Small script to handle fade-in effect
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
