<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="student_registration.css">

</head>
<body>

<div class="container">
    <h2>Student Registration Form</h2>
    <form action="submit_registration.php" method="post" onsubmit="return validateForm()">
        
        <div class="form-group">
            <input type="text" name="first_name" placeholder="First Name" required>
        </div>

        <div class="form-group">
            <input type="text" name="last_name" placeholder="Last Name" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Gmail Address" pattern=".+@gmail\.com" required>
        </div>

        <div class="form-group password-group">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <span class="toggle-password" onclick="togglePassword()">👁️</span>
        </div>

        <div class="form-group">
            <input type="date" name="dob" required>
        </div>

        <div class="form-group">
            <input type="text" name="father_name" placeholder="Father's Name" required>
        </div>

        <div class="form-group">
            <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" maxlength="10" required>
        </div>

        <button type="submit" class="btn">Register</button>

    </form>

    <!-- Link to the login page if the user already has an account -->
    <p>Already have an account? <a href="login.php">Login Here</a></p>
</div>

<script>
function togglePassword() {
    var passField = document.getElementById("password");
    if (passField.type === "password") {
        passField.type = "text";
    } else {
        passField.type = "password";
    }
}

function validateForm() {
    var mobile = document.getElementById("mobile").value;
    if (mobile.length !== 10 || isNaN(mobile)) {
        alert("Mobile number must be exactly 10 digits.");
        return false;
    }
    return true;
}
</script>

</body>
</html>
