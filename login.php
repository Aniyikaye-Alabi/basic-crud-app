<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h3>Login Page</h3>
    <form action="processlogin.php" method="POST">
        <input type="text" name="username" value="" placeholder="Username" required>
        <input type="password" name="password" value="" placeholder="Password" required>
        <input type="submit" name="login" value="Login">
    </form>
    <a href="resetpassword.php">Reset Passowrd</a>
</body>
</html>