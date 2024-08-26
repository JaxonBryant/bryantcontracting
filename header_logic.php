
<?php


// Ensure the user is logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
    exit;
}

// Retrieve user role from session
$user_role = $_SESSION['admin'] ?? 0; // Default to 0 if not set

// Include the appropriate header based on the user's role
if ($_SESSION['admin'] == 1) {
    include 'header_admin.php'; // Admin-specific header
} else {
    include 'header_customer.php'; // Customer-specific header
}
?>