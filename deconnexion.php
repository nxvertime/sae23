<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header('Location: index.php'); // Redirect to the homepage
exit; // Ensure no further code is executed
?>
