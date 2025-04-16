<?php
// Assuming you have a session started
session_start();

// Dummy login credentials (replace with your actual login logic)
$users = [
    'student' => [
        'email' => 'student@example.com',
        'password' => 'studentpass',
        'role' => 'student',
    ],
    'faculty' => [
        'email' => 'faculty@example.com',
        'password' => 'facultypass',
        'role' => 'faculty',
    ],
    'admin' => [
        'email' => 'admin@example.com',
        'password' => 'adminpass',
        'role' => 'admin',
    ]
];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form inputs
    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user exists in the dummy data and password matches
    if (isset($users[$role]) && $users[$role]['email'] === $email && $users[$role]['password'] === $password) {
        // User is authenticated, set session variables
        $_SESSION['role'] = $role;
        $_SESSION['email'] = $email;

        // Redirect to the respective dashboard based on the role
        if ($role == 'student') {
            header('Location: student_dashboard.php');
        } elseif ($role == 'faculty') {
            header('Location: faculty_dashboard.php'); // Redirect to faculty dashboard
        } elseif ($role == 'admin') {
            header('Location: admin_dashboard.php'); // Redirect to admin dashboard
        }
        exit(); // Ensure no further code runs after redirection
    } else {
        // Redirect back to the login page with an error (optional)
        header('Location: login.php?error=invalid_credentials');
        exit();
    }
}
?>
