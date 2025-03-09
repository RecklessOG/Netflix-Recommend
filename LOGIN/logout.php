<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Delete the session cookie if it exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), // Session cookie name
        '',
        time() - 42000, // Expire the cookie
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Redirect to login page after clearing everything
header("Location: index.php");
exit();
?>