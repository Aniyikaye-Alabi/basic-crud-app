<?php
include("connection_string.php");

if (isset($_POST['submit'])) {
    $name = $_POST["username"];
    $userpassword = $_POST["password"];

    $sql = "INSERT INTO user_data (username, password) VALUES ('$name', '$userpassword')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

else {
    echo "what";
}



?>
