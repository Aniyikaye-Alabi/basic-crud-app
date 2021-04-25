<?php
    session_start();
    include("connection_string.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h3>Welcome to your Dashboard <?php echo $_SESSION['username'] ?></h3>
    <form action="processcourses.php" method="POST">
        <p>Add course</p>
        <input type="text" name="course" value="" placeholder="Course name" required>
        <input type="submit" name="add" value="Add course">
    </form>

    <a href="viewcourses.php">View all added courses here</a>
</body>
</html>