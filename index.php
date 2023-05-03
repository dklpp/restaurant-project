<?php
session_start();
if (isset($_SESSION["user_id"])) {
    
    $mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION['user_id']}";
            
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
            text-align: center;
        }

        .link, .links {
            text-decoration: underline;
            color: rgb(255, 140, 0);
        }

        .link_logout{
            text-decoration: underline;
            color: red;
        }
    </style>
</head>
<body>
    <?php if (isset($_SESSION["user_id"])): ?>
        <h1>You are logged in.<br>
            Go to <a class = "link" href="index.html"> Main Page</a><br>
            <a class = "link_logout" href="index.html"> Log Out </a><br>
            <a class="links" href="signup.html">Delete Your Account</a></h1>
        </h1>
    <?php else: ?>
        <h1><a class="links" href="login.php">Log In</a><br>
        <a class="links" href="signup.html">Sign Up</a><br>
        <a class="links" href="delete-account.html">Delete Your Account</a></h1>
    <?php endif; ?>
</body>
</html>
