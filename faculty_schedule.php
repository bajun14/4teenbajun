<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faculty Class Schedule</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
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
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
        }

        th {
            background-color: #f39c12;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
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

        .schedule-table {
            margin-top: 40px;
        }

        .schedule-table th, .schedule-table td {
            text-align: center;
            padding: 12px;
            border: 1px solid #ddd;
        }

        .schedule-table th {
            background-color: #f39c12;
            color: white;
        }

        .schedule-table td {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Faculty Class Schedule</h1>
        
        <!-- Schedule Table (Weekly) -->
        <div class="schedule-table">
            <table>
                <thead>
                    <tr>
                        <th>Time/Day</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>9:00 AM - 10:00 AM</td>
                        <td>Mechatronics</td>
                        <td>DDTM</td>
                        <td>DDTUM</td>
                        <td>Mechatronics</td>
                        <td>DDTM</td>
                        <td>Mechatronics</td>
                    </tr>
                    <tr>
                        <td>10:00 AM - 11:00 AM</td>
                        <td>DDTM</td>
                        <td>Mechatronics</td>
                        <td>Mechatronics</td>
                        <td>DDTM</td>
                        <td>DDTUM</td>
                        <td>DDTUM</td>
                    </tr>
                    <tr>
                        <td>11:00 AM - 12:00 PM</td>
                        <td>DDTUM</td>
                        <td>DDTM</td>
                        <td>Mechatronics</td>
                        <td>DDTUM</td>
                        <td>Mechatronics</td>
                        <td>Mechatronics 2nd Year</td>
                    </tr>
                    <tr>
                        <td>12:00 PM - 1:00 PM</td>
                        <td>Mechatronics 2nd Year</td>
                        <td>Mechatronics 2nd Year</td>
                        <td>DDTM</td>
                        <td>DDTUM</td>
                        <td>Mechatronics</td>
                        <td>DDTUM</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <a class="back-btn" href="faculty_dashboard.php"><i class="fas fa-arrow-left"></i> Back to Dashboard</a>
    </div>
</body>
</html>
