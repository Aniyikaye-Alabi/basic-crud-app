<?php
    session_start();
    include('connection_string.php');

    $course_id = $_GET['id'];
    $user_id = $_SESSION['id'];

    $sql = "DELETE FROM courses WHERE `course_name` = '$course_id' AND `user_id` = '$user_id'";

    if (mysqli_query($conn, $sql)) {
        echo header("Location: viewcourses.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
?>