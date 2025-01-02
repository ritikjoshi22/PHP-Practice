<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
</head>
<body>
    <form action="post.php" method="post">
        <h1>Demonstration of POST Method</h1>
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label for="">password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>