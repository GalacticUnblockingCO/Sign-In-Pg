<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Perform authentication (dummy example)
        // You would typically validate the username and password against a database
        if ($username === "admin" && $password === "password") {
            // Authentication successful, redirect to the new link
            header("Location: https://galacticunblockingco.github.io/BanBot-v1/");
            exit;
        } else {
            // Authentication failed, redirect back to sign-in page with an error message
            header("Location: signin.php?error=1");
            exit;
        }
    } else {
        // Username or password not provided, redirect back to sign-in page with an error message
        header("Location: signin.php?error=1");
        exit;
    }
} else {
    // If the form is not submitted, redirect back to sign-in page
    header("Location: signin.php");
    exit;
}
?>

