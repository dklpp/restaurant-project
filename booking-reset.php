<?php


// Create database connection
$conn = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');

// Check if connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form submitted
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $email = $_POST['email'];
    // $current_password = $_POST['current_password'];
    $new_date = $_POST['new_date'];
    $new_time = $_POST['new_time'];

    $sql = sprintf("SELECT * FROM bookings 
    WHERE email='%s'",
    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if ($user) {
        $newsql = "UPDATE bookings SET `date`='$new_date', time='$new_time' WHERE email='$email'";
        // $newsql = "UPDATE bookings SET date ='$new_date' WHERE email='$email'";
        // $newsql = "UPDATE bookings SET time ='$new_time' WHERE email='$email'";
        if ($mysqli->query($newsql) === TRUE) {
            header("Location: booking-changed.html");
        } else {
            echo "Error updating: " . $mysqli->error;
        }
    } else {
        echo "User not found";
    }
}

// Close database connection
mysqli_close($conn);


?>
