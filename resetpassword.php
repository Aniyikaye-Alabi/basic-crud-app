<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <form action="resetprocess.php" method="POST">
        <input type="text" name="username" value="" placeholder="Username" required>
        <input type="password" name="oldpassword" value="" placeholder="Old password" required>
        <input type="password" name="newpassword" value="" placeholder="New password" required>
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>