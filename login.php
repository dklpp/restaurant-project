<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
        if($_COOKIE['user'] == ''):
    ?>
    <div class="container">
        <div class="title">Login</div>
        <form action="authorization.php">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email Address</span>
                    <input type="text" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" required>
                </div>
            </div>
            <div class="text">
                Don't have an account? <a class="signup" href="signup.html">Sign Up</a>
            </div>
            <div class="button">
                <input type="submit" value="Login">
            </div>
        </form>
        <?php else: ?>
            <p>You are authorized! To go to main page press <a href="/exit.php">here</a>.</p>

        <?php endif;?>
    </div>
</body>

</html>