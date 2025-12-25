<?php

session_start();

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$username = isset($_POST['unam']) ? trim($_POST['unam']) : '';
$password = isset($_POST['upws']) ? $_POST['upws'] : '';

if ($username === '' || $password === '') {
    header('Location: login.php?error=missing');
    exit;
}

// Connect to DB (matches other project files)
$conn = mysqli_connect("localhost","root","","slcamping_project");
if (!$conn) {
    // In production, log the error instead of echoing
    die('Database connection error');
}

// Use prepared statement to prevent SQL injection
$stmt = mysqli_prepare($conn, "SELECT user_id, username, password, role_id FROM register WHERE username = ?");
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && ($row = mysqli_fetch_assoc($result))) {
    // Plaintext password comparison (no hashing)
    if ($password === $row['password']) {
        // Set session and redirect based on role
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role_id'] = $row['role_id'];

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        if (isset($row['role_id']) && intval($row['role_id']) === 2) {
            header('Location: admin_dashboard.php');
            exit;
        } else {
            header('Location: product.php');
            exit;
        }
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header('Location: login.php?error=badpass');
        exit;
    }

} else {
    // user not found
    if ($stmt) mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header('Location: login.php?error=nouser');
    exit;
}

?>