<?php
session_start();

// Dummy student data (Replace with actual database data)
$student = [
    'name' => 'John Doe',
    'student_id' => 'STD123456',
    'course' => 'Computer Science',
    'year' => '3rd Year',
    'email' => 'johndoe@example.com',
    'phone' => '+1234567890',
    'father_name' => 'Richard Doe', // Added Father's Name
    'attendance' => '85%',
    'grade' => '78%',
    'pending_fees' => '$500',
    'profile_picture' => 'images/profile.jpg'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ececec;
            margin: 0;
            padding: 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #333;
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

        nav ul li a {
            text-decoration: none;
            font-weight: 500;
            color: white;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ff9800;
        }

        .container {
            max-width: 90%;
            margin: 30px auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.15);
        }

        .student-details {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #f9f9f9;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .edit-btn {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        .student-info {
            text-align: left;
            flex: 1;
            padding-left: 30px;
        }

        .student-info p {
            margin: 8px 0;
            font-size: 16px;
            font-weight: 400;
        }

        .student-info strong {
            color: #555;
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
            border: 4px solid #ff9800;
            transition: transform 0.3s;
        }

        .profile-picture:hover {
            transform: scale(1.1);
        }

        .horizontal-box {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 20px;
        }

        .card {
            flex: 1;
            background: #f9f9f9;
            padding: 25px;
            min-width: 250px;
            border-radius: 10px;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.15);
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.3);
        }

        .card h2 {
            color: #ff9800;
            font-size: 22px;
        }

        @media (max-width: 900px) {
            .student-details {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-container {
                justify-content: center;
                margin-bottom: 15px;
            }

            .student-info {
                text-align: center;
                padding: 0;
            }

            .horizontal-box {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 90%;
                margin: 10px 0;
            }

            .edit-btn {
                top: 10px;
                left: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">🎓 Student Portal</div>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-chart-line"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-calendar"></i> Attendance</a></li>
            <li><a href="#"><i class="fas fa-graduation-cap"></i> Grades</a></li>
        </ul>
    </nav>

    <!-- Dashboard Container -->
    <div class="container">
        <h1>Welcome, <?php echo $student['name']; ?>!</h1>

        <!-- Student Details Section -->
        <div class="student-details">
            <a href="edit_student.php" class="edit-btn">Edit</a>
            <div class="profile-container">
                <img src="<?php echo $student['profile_picture']; ?>" alt="Profile Picture" class="profile-picture">
            </div>
            <div class="student-info">
                <p><strong>Name:</strong> <?php echo $student['name']; ?></p>
                <p><strong>Student ID:</strong> <?php echo $student['student_id']; ?></p>
                <p><strong>Course:</strong> <?php echo $student['course']; ?></p>
                <p><strong>Year:</strong> <?php echo $student['year']; ?></p>
                <p><strong>Email:</strong> <?php echo $student['email']; ?></p>
                <p><strong>Phone:</strong> <?php echo $student['phone']; ?></p>
                <p><strong>Father's Name:</strong> <?php echo $student['father_name']; ?></p> <!-- Added here -->
            </div>
        </div>

        <!-- Dashboard Metrics - Row 1 -->
        <div class="horizontal-box">
            <div class="card">
                <p>Attendance Rate</p>
                <h2><?php echo $student['attendance']; ?></h2>
            </div>
            <div class="card">
                <p>Average Grade</p>
                <h2><?php echo $student['grade']; ?></h2>
            </div>
            <div class="card">
                <p>Pending Fees</p>
                <h2><?php echo $student['pending_fees']; ?></h2>
            </div>
        </div>

        <!-- Dashboard Metrics - Row 2 -->
        <div class="horizontal-box">
            <div class="card">
                <p>Class Schedule</p>
                <h2><a href="student_schedule.php" style="text-decoration: none; color: #ff9800;">View Schedule</a></h2>
            </div>
        </div>
    </div>
</body>
</html>
