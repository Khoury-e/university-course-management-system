<?php
require_once("dbconfig.php");

$courseId = isset($_GET['courseId']) ? intval($_GET['courseId']) : 0;

if ($courseId > 0) {
    $query = "UPDATE courses SET IS_ACTIVE = NOT IS_ACTIVE WHERE ID = $courseId";
    if ($db->query($query) === TRUE) {
        echo "Course status updated successfully.";
    } else {
        echo "Error updating course: " ;
    }
}

// Redirect back to the courses page (or wherever you need)
header("Location: displayCoursesAdmin.php");
exit();
?>
