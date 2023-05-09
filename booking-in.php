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

        .link {
            text-decoration: none;
            color: rgb(255, 140, 0);
        }

        .links{
            text-decoration: none;
            color: yellow;
        }


    </style>
</head>
<body>
    <?php if (isset($_SESSION["user_id_booking"])): ?>
        <h1>Now you can check your reservation.<br>
            <a class="links" href="reservation.php">Your reservation</a></h1>
        </h1>
    <?php else: ?>
        <h1><a class="links" href="bookatable.html">Book A Table</a><br>
        <a class="links" href="delete-booking.html">Delete Your Booking</a></h1>
    <?php endif; ?>
</body>
</html>
