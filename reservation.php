<?php
session_start();
if (isset($_SESSION["user_id_booking"])) {
    
    $mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');
    $sql = "SELECT * FROM bookings
            WHERE id = {$_SESSION['user_id_booking']}";
            
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="container">
    <?php if(isset($user)): ?>
        <div class="welcoming">Hello <?= htmlspecialchars($user["name"]) ?>, your reservation time: <?= htmlspecialchars($user["date"]) ?> <?= htmlspecialchars($user["time"]) ?> </h1>
        <div class = "navigation">
            <h3> Go to <a class = "link" href="index.php"> Main Page</a></br>
                <a class = "link" href="booking-reset.html"> Change Details </a></br>
                <a class = "link_logout" href="booking-off.php"> Go to Main Page </a></br>
                <a class="delete-account" href="delete-booking.html">Delete your booking</a>
            </h3>
        </div>
    </div>
    <?php endif;?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@grammarly/editor-sdk?clientId=client_NdKLhtFEgSGzYjTURFzGco"></script>
</body>

</html>