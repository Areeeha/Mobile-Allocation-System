<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile_allocation_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Start the session if not already started
session_start();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Logout functionality
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    // Destroy the session
    session_unset(); // Remove all session variables
    session_destroy(); // Destroy the session

    // Redirect to the login page
    header("Location: login.php");
    exit();
}
?>
