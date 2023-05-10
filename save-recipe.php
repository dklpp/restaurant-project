<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $user_id = $_SESSION["user_id"];
    $name = $_POST['name'];
    $url = $_POST['url'];

    // Escape special characters to prevent SQL injection
    $name = $mysqli->real_escape_string($name);
    $url = $mysqli->real_escape_string($url);

    // Prepare the SQL statement to insert the saved recipe into the user_recipes table
    $query = "INSERT INTO user_recipes (user_id, recipe_name, recipe_url) VALUES ('$user_id', '$name', '$url')";

    // Execute the query
    if ($mysqli->query($query) === TRUE) {
        echo "Recipe saved successfully";
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
}
?>
