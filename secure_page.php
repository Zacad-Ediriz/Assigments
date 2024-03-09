<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    // User is not authenticated, redirect to login page
    header("Location: login.php");
    exit;
}
?>