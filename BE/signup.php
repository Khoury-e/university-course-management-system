<?php
// Include dbconfig.php for database connection
require_once("dbconfig.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password (You can hash the password if needed)
    // $hashedPassword = hash("sha256", $password);

    // Prepare and execute SQL statement to insert user data into the database
    $query = "INSERT INTO tbl_users (USERNAME, PASSWORD) VALUES (?, ?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$username, $password]);

    // Redirect to login page after successful sign-up
    header("Location: login.php");
    exit();
}
?>
