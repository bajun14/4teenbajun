<?php
// Sample data – replace this with data fetched from your database
$studentRequests = [
    [
        'student_id' => 'STUD001',
        'name' => 'John Doe',
        'course' => 'Mechatronics',
        'request_type' => 'Schedule Change',
        'message' => 'Requesting to change Monday’s 10 AM lecture.',
        'status' => 'Pending'
    ],
    [
        'student_id' => 'STUD002',
        'name' => 'Alice Smith',
        'course' => 'DDTM',
        'request_type' => 'Leave Application',
        'message' => 'Will be absent next week due to medical reasons.',
        'status' => 'Approved'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Requests</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f7f7;
        }

        header {
            background-color: #2c3e50;
            padding: 20px;
            color: white;
            text-align: center;
        }

        .container {
            max-width: 90%;
            margin: 30px auto;
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background-color: #34495e;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        .status-pending {
            color: #e67e22;
            font-weight: bold;
        }

        .status-approved {
            color: #2ecc71;
            font-weight: bold;
        }

        .back-btn {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .back-btn:hover {
            background: #2980b9;
        }

        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th, td {
                text-align: left;
            }

            th {
                background-color: #2c3e50;
                color: white;
            }

            td {
                border-top: none;
            }

            td::before {
                content: attr(data-label);
                font-weight: bold;
                display: block;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>📬 Student Requests</h1>
</header>

<div class="container">
    <h2>Requests List</h2>

    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Request Type</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($studentRequests as $request): ?>
                <tr>
                    <td><?php echo $request['student_id']; ?></td>
                    <td><?php echo $request['name']; ?></td>
                    <td><?php echo $request['course']; ?></td>
                    <td><?php echo $request['request_type']; ?></td>
                    <td><?php echo $request['message']; ?></td>
                    <td class="<?php echo $request['status'] === 'Pending' ? 'status-pending' : 'status-approved'; ?>">
                        <?php echo $request['status']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="faculty_dashboard.php" class="back-btn"><i class="fas fa-arrow-left"></i> Back to Dashboard</a>
</div>

</body>
</html>
