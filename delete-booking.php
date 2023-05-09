<?php

function name_verify($name1, $name2) {
    // remove leading/trailing spaces and convert to lowercase
    $name1 = strtolower(trim($name1));
    $name2 = strtolower(trim($name2));
    return ($name1 === $name2);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $email = $_POST['email'];
    $name = $_POST['name'];

    $sql = sprintf("SELECT * FROM bookings 
    WHERE email='%s'", 
    $mysqli->real_escape_string($_POST["email"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if ($user) {
        if (name_verify($name, $user["name"])) {
            $delete_sql = sprintf("DELETE FROM bookings WHERE email='%s'", 
            $mysqli->real_escape_string($email));
            if ($mysqli->query($delete_sql) === true) {
                header("Location: delete-booking-success.html");
            } else {
                echo "Error deleting bookings: " . $mysqli->error;
            }
        } else {
            echo "Incorrect name.";
        }
    } else {
        echo "User account not found.";
    }
}

// Close database connection
mysqli_close($conn);

?>
