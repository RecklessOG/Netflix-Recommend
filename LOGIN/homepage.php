<?php
session_start();
include("connect.php");

// If no session, force user to login manually
if (!isset($_SESSION['email'])) {
    header("Location: index.php"); // Redirect to login form
    exit();
}

$email = $_SESSION['email'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

if ($query && mysqli_num_rows($query) > 0) {
    $user = mysqli_fetch_assoc($query);
    $_SESSION['user_fullname'] = $user['firstname'] . " " . $user['lastname'];

    // Redirect to Flask home page with username and email
    $redirect_url = "http://127.0.0.1:5000/home?user=" . urlencode($_SESSION['user_fullname']) . "&email=" . urlencode($_SESSION['email']);
    header("Location: " . $redirect_url);
    exit();
} else {
    // If user not found, clear session and force login
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}
?>