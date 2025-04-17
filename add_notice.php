<?php
// This is where you handle the notice addition, this is just a simple placeholder for the add notice page.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Notice</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
        }
        input, textarea {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        textarea {
            height: 150px;
            resize: none;
        }
        button {
            background-color: #2ecc71;
            color: white;
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Add New Notice</h1>
    <form action="add_notice_action.php" method="POST">
        <div class="form-group">
            <label for="notice_title">Notice Title</label>
            <input type="text" id="notice_title" name="notice_title" required>
        </div>
        <div class="form-group">
            <label for="notice_content">Notice Content</label>
            <textarea id="notice_content" name="notice_content" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Submit Notice</button>
        </div>
    </form>
</div>

</body>
</html>
