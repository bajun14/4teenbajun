<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle form submission (you can replace this with DB code)
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $department = $_POST['department'];

    // Example: Save to database or perform other actions
    $_SESSION['success'] = "Student $name registered successfully!";
    header("Location: student_register.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .registration-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .registration-form h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #2c3e50;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        .submit-btn {
            width: 100%;
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #27ae60;
        }
        .success {
            color: green;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <form action="" method="POST" class="registration-form">
        <h2>Student Registration</h2>

        <?php if (isset($_SESSION['success'])): ?>
            <p class="success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
        <?php endif; ?>

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="student_id">Student ID</label>
            <input type="text" name="student_id" id="student_id" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" id="department" required>
        </div>

        <button type="submit" class="submit-btn">Register</button>
    </form>
</body>
</html>
