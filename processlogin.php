<?php
    session_start();
    include("connection_string.php");

    if(isset($_POST['login'])) {
        $name = $_POST['username'];
        $userpassword = $_POST['password'];

        $sql = "SELECT * FROM `user_data` WHERE username = '$name' AND password = '$userpassword'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "Logged in";
            $_SESSION['username'] = $name;
        }
        
        else {
            echo "Invalid username or password";
        }

    }
?>