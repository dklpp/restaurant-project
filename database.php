<?php

$host = "localhost";
$dbname = "itech174";
$username = "itech174";
$password = "Fe7@bwZWgAqV";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
?>