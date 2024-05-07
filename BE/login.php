<?php
// Include dbconfig.php for database connection
require_once("dbconfig.php");

// Get the user credentials from the form
$UserName = $_POST["username"];
$Pass = $_POST["password"];

// Hash the password (if time permits)
//$hashedPassword = hash("sha256", $Pass);

// Check if the user exists
$query = "SELECT ID FROM tbl_users WHERE USERNAME = ? AND PASSWORD = ?";
$stmt = $db->prepare($query);
$stmt->execute([$UserName, $Pass]);
$rowCount = $stmt->rowCount();

if ($rowCount > 0) { // Successful login
    session_start();
    $_SESSION["username"] = $UserName;
    header("Location: displayCoursesAdmin.php");
    exit();
} else {
    header("Location: ../index.html?error=invalid_credentials");
    exit();
}
?>
