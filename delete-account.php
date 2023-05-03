<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = sprintf("SELECT * FROM users 
    WHERE email='%s'", 
    $mysqli->real_escape_string($_POST["email"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user["password_hash"])) {
            $delete_sql = sprintf("DELETE FROM users WHERE email='%s'", 
            $mysqli->real_escape_string($email));
            if ($mysqli->query($delete_sql) === true) {
                header("Location: delete-account-success.html");
            } else {
                echo "Error deleting account: " . $mysqli->error;
            }
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User account not found.";
    }
}

// Close database connection
mysqli_close($conn);

?>
