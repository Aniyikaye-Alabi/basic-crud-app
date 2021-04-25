<?php
    session_start();
    include("connection_string.php");

    $id = $_SESSION['id'];
    $sql = "SELECT course_name FROM `courses` WHERE `user_id` = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        ?>
        <table>
                <thead>
                    <tr>
                        <td><strong>Courses</strong></td>
                        <td><strong>Edit</strong></td>
                        <td><strong>Delete</strong></td>
                    </tr>
                </thead>   
        <?php   while($row = mysqli_fetch_assoc($result)) {
            echo "
             
                <tbody>
                    <tr>
                        <td>" . $row['course_name'] . "</td>
                        <td><a href='edit.php?id=" . $row['course_name'] . "'>Edit</a></td>
                        <td><a href='delete.php?id=" . $row['course_name'] . "'>Delete</a></td>
                    </tr>
                </tbody>
            ";
        }
        ?>
        </table>

        <br/>
        <a href="dashboard.php">Dashboard here</a>
    <?php
    } else {
        echo "0 results";
    }
?>