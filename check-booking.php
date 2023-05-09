<?php 

function name_verify($name1, $name2) {
    // remove leading/trailing spaces and convert to lowercase
    $name1 = strtolower(trim($name1));
    $name2 = strtolower(trim($name2));
    return ($name1 === $name2);
}

$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $sql = sprintf("SELECT * FROM bookings 
    WHERE email='%s'", 
    $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    if($user) {
        if(name_verify($_POST["name"], $user["name"])){
            session_start();
            $_SESSION["user_id_booking"] = $user["id"];
            header("Location: booking-in.php");
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
    <title>Check your reservation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="title">Reservation</div>
        <?php if($is_invalid): ?>
            <em>Invalid credentials</em>
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
                    <span class="details">Name</span>
                    <input type="name" name="name" placeholder="Enter your name">
                </div>
            </div>
            <div class="text">
                Don't have a reservation? <a class="signup" href="bookatable.html">Book a Table</a>
            </div>
            <div class="text">
                <a class="signup" href="booking-reset.html">Change booking details</a>
            </div>
            <div class="text">
                <a class="signup" href="delete-booking.html">Delete your booking</a>
            </div>
            <div class="button">
                <input type="submit" value="Next">
            </div>
        </form>
    </div>
</body>

</html>