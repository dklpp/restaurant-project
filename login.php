<?php 
$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = sprintf("SELECT * FROM users 
    WHERE email='%s'", 
    $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    if($user) {
        if(password_verify($_POST["password"], $user["password_hash"])){
            session_start();
            $_SESSION["user_id"] = $user["id"];
            header("Location: index.php");
            exit;
        }else {
            $is_invalid = true;
        }
    }
}
?>

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
    <div class="container">
        <div class="title">Login</div>
        <?php if($is_invalid): ?>
            <em>Invalid login</em>
        <?php endif; ?>
        <form method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email Address</span>
                    <input type="text" name="email" 
                    value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" 
                    placeholder="Enter your email">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
            </div>
            <div class="text">
                Don't have an account? <a class="signup" href="signup.html">Sign Up</a>
            </div>
            <div class="text">
                <a class="signup" href="password-reset.html">Reset password</a>
            </div>
            <div class="text">
                <a class="signup" href="delete-account.html">Delete your account</a>
            </div>
            <div class="button">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>

</html>