<?php
// Dummy student data (replace with actual database values)
$student = [
    'name' => 'John Doe',
    'student_id' => 'STD123456',
    'course' => 'Computer Science',
    'year' => '3rd Year',
    'email' => 'johndoe@example.com',
    'phone' => '+1234567890',
    'profile_picture' => 'images/profile.jpg' // Update to actual path
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student Info</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 30px;
            color: #333;
        }

        .student-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #f9f9f9;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .profile-container {
            flex: 1;
            display: flex;
            justify-content: center;
            padding-right: 20px;
        }

        .profile-picture {
            width: 200px;
            height: 260px;
            object-fit: cover;
            border-radius: 10px;
            border: 4px solid #ff9800;
            transition: transform 0.3s;
        }

        .profile-picture:hover {
            transform: scale(1.05);
        }

        .form-container {
            flex: 2;
            padding-left: 20px;
        }

        form input,
        form select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        form label {
            font-weight: 500;
            margin-top: 10px;
            display: block;
        }

        .button-box {
            background-color: #ff9800;
            border-radius: 10px;
            padding: 12px;
            margin-top: 20px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .button-box:hover {
            background-color:rgb(185, 124, 31);
        }

        .button-box button {
            background: none;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .student-details {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-container, .form-container {
                padding: 0;
            }

            .form-container {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Student Information</h2>

    <div class="student-details">
        <div class="profile-container">
            <img src="<?php echo $student['profile_picture']; ?>" alt="Profile Picture" class="profile-picture">
        </div>

        <div class="form-container">
            <form action="update_student.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name" value="<?php echo $student['name']; ?>" placeholder="Name" required>
                <input type="text" name="student_id" value="<?php echo $student['student_id']; ?>" placeholder="Student ID" required>
                <input type="text" name="course" value="<?php echo $student['course']; ?>" placeholder="Course" required>
                <input type="text" name="year" value="<?php echo $student['year']; ?>" placeholder="Year" required>
                <input type="email" name="email" value="<?php echo $student['email']; ?>" placeholder="Email" required>
                <input type="text" name="phone" value="<?php echo $student['phone']; ?>" placeholder="Phone" required>

                <label for="profile_picture">Change Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture">

                <div class="button-box">
                    <button type="submit">Update Student</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
