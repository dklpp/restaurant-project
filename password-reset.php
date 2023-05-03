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
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = sprintf("SELECT * FROM users 
    WHERE email='%s'",
    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["current_password"], $user["password_hash"])) {
            $newpassword = password_hash($_POST["new_password"], PASSWORD_DEFAULT); //hash of password
            $newsql = "UPDATE users SET password_hash ='$newpassword' WHERE email='$email'";
            if ($mysqli->query($newsql) === TRUE) {
                header("Location: password-changed.html");
            } else {
                echo "Error updating password: " . $mysqli->error;
            }
        } else {
            echo "Invalid current password";
        }
    } else {
        echo "User not found";
    }
}

// Close database connection
mysqli_close($conn);


?>
