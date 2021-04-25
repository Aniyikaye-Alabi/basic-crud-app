<?php
    session_start();
    include('connection_string.php');
    // include('edit.php');
    if(isset($_POST['submit'])) {
        $course_name = $_POST['course_name'];
        $old_course = $_SESSION['course_id'];
        $user_id = $_SESSION['id'];

        $uptcourse = "UPDATE `courses`
        SET `course_name` = '$course_name'
        WHERE `course_name` = '$old_course' AND `user_id` = '$user_id'";

        if (mysqli_query($conn, $uptcourse)) {
            echo header("Location: viewcourses.php");
            // echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>