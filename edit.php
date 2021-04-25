<?php
    session_start();
    include('connection_string.php');

    $course_id = $_GET['id'];
    $_SESSION['course_id'] = $course_id;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Edit <?php echo $course_id?></h3>
    <form action="updatecourse.php" method="POST">
        <input type="text" name="course_name" value="<?php echo $course_id?>" placeholder="Username" required>
        <input type="submit" name="submit" value="Update">
    </form>
    <a href="viewcourses.php">View course list</a>
</body>
</html>