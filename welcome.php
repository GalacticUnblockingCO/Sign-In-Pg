<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate username and password (you would typically check against a database)
        // For demonstration purposes, let's assume the correct username is "admin" and password is "password"
        if ($username === "GalacticUnblockingStaff" && $password === "StaffMember") {
            // Authentication successful, redirect the user to a welcome page
            header("Location: welcome.php");
            exit;
        } else {
            // Authentication failed, display an error message
            echo "Invalid username or password. Please try again.";
        }
    } else {
        // Username or password not provided, display an error message
        echo "Username or password not provided.";
    }
}
?>
