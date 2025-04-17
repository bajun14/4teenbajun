<?php 
session_start();

// Dummy faculty data (Replace with actual database data)
$faculty = [
    'name' => 'Dr. Jane Smith',
    'faculty_id' => 'FAC001',
    'department' => 'Computer Science',
    'email' => 'janesmith@example.com',
    'phone' => '+9876543210',
    'profile_picture' => 'path/to/faculty_profile.jpg' // Change this to the uploaded profile picture path
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #2c3e50;
            padding: 15px 20px;
            color: white;
        }

        nav .logo {
            font-size: 22px;
            font-weight: 600;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            font-weight: 500;
            color: white;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #f39c12;
        }

        .container {
            max-width: 90%;
            margin: 30px auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.15);
        }

        .faculty-details {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #e7f2f8;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .edit-button {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: #f39c12;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .edit-button:hover {
            background-color: #e67e22;
        }

        .faculty-info {
            text-align: left;
            flex: 1;
            padding-left: 30px;
        }

        .faculty-info p {
            margin: 8px 0;
            font-size: 16px;
            font-weight: 400;
        }

        .faculty-info strong {
            color: #34495e;
        }

        .profile-container {
            display: flex;
            justify-content: flex-end;
            flex: 1;
            padding-right: 30px;
        }

        .profile-picture {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #f39c12;
            transition: transform 0.3s;
        }

        .profile-picture:hover {
            transform: scale(1.1);
        }

        .dashboard-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .option-card {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            cursor: pointer;
        }

        .option-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.2);
        }

        .option-card i {
            font-size: 30px;
            color: #f39c12;
            margin-bottom: 10px;
        }

        .option-card h3 {
            color: #34495e;
            font-size: 18px;
            margin-top: 0;
        }

        .add-notice-row {
            margin-top: 20px;
            text-align: center;
        }

        .add-notice-btn {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-notice-btn:hover {
            background-color: #27ae60;
        }

        @media (max-width: 900px) {
            .faculty-details {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-container {
                justify-content: center;
                margin-bottom: 15px;
                padding: 0;
            }

            .faculty-info {
                text-align: center;
                padding: 0;
            }

            .datetime-box {
                margin: 20px 0 0 0;
                width: 100%;
                max-width: 350px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">🎓 Faculty Portal</div>
    </nav>

    <div class="container">
        <h1>Welcome, <?php echo $faculty['name']; ?>!</h1>

        <div class="faculty-details">
            <a href="edit_faculty_profile.php" class="edit-button"><i class="fas fa-edit"></i> Edit</a>
            <div class="profile-container">
                <img src="<?php echo $faculty['profile_picture']; ?>" alt="Profile Picture" class="profile-picture">
            </div>
            <div class="faculty-info">
                <p><strong>Name:</strong> <?php echo $faculty['name']; ?></p>
                <p><strong>Faculty ID:</strong> <?php echo $faculty['faculty_id']; ?></p>
                <p><strong>Department:</strong> <?php echo $faculty['department']; ?></p>
                <p><strong>Email:</strong> <?php echo $faculty['email']; ?></p>
                <p><strong>Phone:</strong> <?php echo $faculty['phone']; ?></p>
            </div>
        </div>

        <div class="datetime-box">
            <div class="datetime">
                <p><strong>Today's Date:</strong> <span id="date"></span></p>
                <p><strong>Current Time:</strong> <span id="time"></span></p>
            </div>
        </div>

        <div class="dashboard-options">
            <div class="option-card" onclick="window.location.href='mark_attendance.php'">
                <i class="fas fa-calendar-check"></i>
                <h3>Mark Attendance</h3>
            </div>
            <div class="option-card" onclick="window.location.href='student_dashboard.php?student_id=STUD001'">
                <i class="fas fa-user-graduate"></i>
                <h3>View Student Profile</h3>
            </div>
            <div class="option-card" onclick="window.location.href='student_requests.php'">
                <i class="fas fa-envelope-open-text"></i>
                <h3>Student Requests</h3>
            </div>
            <div class="option-card" onclick="window.location.href='faculty_schedule.php'">
                <i class="fas fa-calendar-alt"></i>
                <h3>Schedule</h3>
            </div>
            <div class="option-card" onclick="window.location.href='student_register.php'">
                <i class="fas fa-user-plus"></i>
                <h3>Student Register</h3>
            </div>
        </div>

        <div class="add-notice-row">
            <button class="add-notice-btn" onclick="window.location.href='add_notice.php'">Add Notice</button>
        </div>
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById("date").textContent = now.toLocaleDateString('en-US', options);
            document.getElementById("time").textContent = now.toLocaleTimeString('en-US');
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
    </script>
</body>
</html>
