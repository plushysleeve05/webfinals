<?php
session_start();

// Check if the user is already logged out
if (!isset($_SESSION['user_id'])) {
    // Redirect to the index page or any other appropriate page
    header('Location: ../index.php');
    exit();
}

// If the user is logged in, proceed with the logout process
$_SESSION = array();
session_destroy();
header('Location: ../index.php');
exit();
?>
