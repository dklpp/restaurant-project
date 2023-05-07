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
    <title>Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="profle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
</head>


<body>
    <div class="container">
    <?php if(isset($user)): ?>
        <div class="welcoming">Hello <?= htmlspecialchars($user["name"]) ?> <?= htmlspecialchars($user["surname"]) ?> </h1>
        <div class = "navigation">
            <h3> Go to <a class = "link" href="index.php"> Main Page</a></br>
                <a class = "link" href="recipes-api.html">Check the best recipes</a></br>
                <a class = "link_logout" href="index.php"> Log Out </a></br>
                <a class="delete-account" href="delete-account.html">Delete your account</a>
            </h3>
        </div>
    <?php endif;?>
    </div>
</body>

</html>