<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h3>Registration Portal</h3>
    <form action="processreg.php" method="POST">
        <input type="text" name="username" value="" placeholder="Username" required>
        <input type="password" name="password" value="" placeholder="Password" required>
        <input type="submit" name="submit" value="Submit">
    </form>
    <br/>
    <a href="login.php">Login here</a>
</body>
</html>