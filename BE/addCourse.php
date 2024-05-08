<?php
require_once('dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courseName = $_POST['courseName'];
    $courseDescription = $_POST['courseDescription'];

    $sql = "INSERT INTO courses (`COURSENAME`, `DESCRIPTION`,`IS_ACTIVE`) VALUES ('$courseName','$courseDescription',1)";
    $stmt = $db->query($sql);
    if($stmt->rowCount()>0) {
        echo "Course Added Successfully ";
        header("location: displayCoursesAdmin.php");
    } else{ 
        echo "Failed to Add course";
    }
    
} else {
    echo "Please submit the form to add a course.";
}

?>
