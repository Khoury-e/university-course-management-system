<?php 
    require_once("dbconfig.php");

    global $db;
    $courses = array();
    $query= "SELECT ID, COURSENAME, DESCRIPTION FROM courses WHERE IS_ACTIVE=1";
    $stmt = $db->query($query);
    if($stmt->rowCount()>0) {
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
            $course = new stdClass();
            $course->id = $row['ID'];
            $course->coursename = $row['COURSENAME'];
            $course->description = $row['DESCRIPTION'];

            $courses[]=$course;
        }
        
        foreach($courses as $course) {
            echo "<div class='col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adv'>";
            echo "<div class='item'>";
            echo "<div class='thumb'>";
            echo '<a href="../assets/images/'.$course->id.'.jpeg"><img src="../assets/images/'.$course->id.'.jpeg" alt=""></a>';
            echo "</div>";
            echo "<div class='down-content'>";
            echo "<h4>".$course->coursename."</h4>";
            echo "<h5>".$course->description."</h5>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else{ 
        echo "No Courses Available!";
    }
    
?>