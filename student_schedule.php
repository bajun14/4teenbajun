<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Schedule</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eef2f3;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #34495e;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 14px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .back-btn {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #2c3e50;
            color: white;
            border-radius: 5px;
            font-weight: bold;
        }

        .back-btn:hover {
            background-color: #34495e;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Weekly Schedule</h1>

        <table>
            <thead>
                <tr>
                    <th>Time/Day</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>9:00 AM - 10:00 AM</td>
                    <td>Math</td>
                    <td>Physics</td>
                    <td>English</td>
                    <td>Math</td>
                    <td>ICT</td>
                </tr>
                <tr>
                    <td>10:00 AM - 11:00 AM</td>
                    <td>English</td>
                    <td>Math</td>
                    <td>Physics</td>
                    <td>ICT</td>
                    <td>English</td>
                </tr>
                <tr>
                    <td>11:00 AM - 12:00 PM</td>
                    <td>ICT</td>
                    <td>English</td>
                    <td>Math</td>
                    <td>Physics</td>
                    <td>Math</td>
                </tr>
                <tr>
                    <td>12:00 PM - 1:00 PM</td>
                    <td>Lab</td>
                    <td>Lab</td>
                    <td>Lab</td>
                    <td>Lab</td>
                    <td>Lab</td>
                </tr>
            </tbody>
        </table>

        <a class="back-btn" href="student_dashboard.php"><i class="fas fa-arrow-left"></i> Back to Dashboard</a>
    </div>
</body>
</html>
