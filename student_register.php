<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $department = $_POST['department'];

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
            background-color: rgb(255, 255, 255);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2.page-title {
            color: rgb(16, 239, 255);
            margin-bottom: 20px;
        }

        .registration-form {
            background: white;
            padding: 50px 30px;
            border-radius: 50px;
            box-shadow: 10px 10px 20px rgba(204, 31, 31, 0.1);
            width: 100%;
            max-width: 500px;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 20px;
        }

        .horizontal-buttons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
            position: relative;
        }

        .dropdown-container {
            position: relative;
        }

        .dropdown-container button {
            padding: 10px 20px;
            border: none;
            background-color: #10efff;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: 110%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1000;
            padding: 10px;
            width: 160px;
        }

        .dropdown::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #fff;
        }

        .dropdown button {
            display: block;
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: none;
            background-color: #10efff;
            color: white;
            border-radius: 6px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2 class="page-title">Student Registration</h2>

    <form action="" method="POST" class="registration-form">
        <?php if (isset($_SESSION['success'])): ?>
            <p class="success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
        <?php endif; ?>

        <div class="horizontal-buttons">
            <div class="dropdown-container">
                <button type="button" onclick="toggleDropdown('dtdumDropdown')">DDTUM</button>
                <div class="dropdown" id="dtdumDropdown">
                    <button type="button">1st Year</button>
                    <button type="button">2nd Year</button>
                    <button type="button">3rd Year</button>
                </div>
            </div>

            <div class="dropdown-container">
                <button type="button" onclick="toggleDropdown('mechatronicDropdown')">Mechatronic</button>
                <div class="dropdown" id="mechatronicDropdown">
                    <button type="button">1st Year</button>
                    <button type="button">2nd Year</button>
                    <button type="button">3rd Year</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            const isVisible = dropdown.style.display === 'block';

            // Hide all dropdowns first
            document.querySelectorAll('.dropdown').forEach(d => d.style.display = 'none');

            // Toggle the selected one
            dropdown.style.display = isVisible ? 'none' : 'block';
        }

        // Close dropdowns if clicked outside
        window.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown-container')) {
                document.querySelectorAll('.dropdown').forEach(d => d.style.display = 'none');
            }
        });
    </script>
</body>
</html>
