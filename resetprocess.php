<?php
    include("connection_string.php");

    if(isset($_POST['reset'])) {
        $name = $_POST['username'];
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];

        $sql = "SELECT id FROM `user_data` WHERE username = '$name' AND password = '$oldpassword'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
        $id = $row["id"];

        $uptpassword = "UPDATE `user_data`
        SET `password` = '$newpassword'
        WHERE `id` = $id";

        if (mysqli_query($conn, $uptpassword)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
}

        // if (mysqli_num_rows($result) > 0) {
        //     echo "Logged in";
        // }
        
        // else {
        //     echo "Username or password not correct";
        // }

    }
?>