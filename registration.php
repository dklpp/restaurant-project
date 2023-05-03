<?php 
$name = $_POST['name'];
$surname = $_POST['surname']; 
$phone_num = $_POST['phone_num'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($name)){
    die("Name is required");
}
if (empty($surname)){
    die("Surname is required");
}
if (empty($phone_num)){
    die("Phone number is required");
}
if (! filter_var($email, FILTER_VALIDATE_EMAIL)){
    die(" Valid email is required");
}
if(strlen($password) < 4) {
    die("Password must be at least 4 characters");
}
if( ! preg_match("/[a-z]/i", $password)){
    die("Password must contain at least one letter");
}
if( ! preg_match("/[0-9]/",  $password)){
    die("Password must contain at least one number");
}
if($_POST["password"] !== $_POST["password_confirmation"]){
    die("Password must match");
}
$password = password_hash($_POST["password"], PASSWORD_DEFAULT); //hash of password
$mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');

$sql = "INSERT INTO users (name, surname, phone_num, email, password_hash)
 VALUES(?, ?, ?, ?, ?)";

 $stmt = $mysqli->stmt_init();
 if(! $stmt->prepare($sql)){
    die("SQL error: " . $mysqli->error);
 }

$stmt->bind_param("sssss",$name, $surname, $phone_num, $email, $password);

if($stmt->execute()){
    header("Location: signup-success.html");
    exit();
} else {
    if($mysqli->errno === 1062) {
        die("Email already taken");
    }
    die($mysqli->error. " " . $mysqli->errno);
}


/*$mysql->query("INSERT INTO `users` (`name`, `surname`, `phone_num`, `email`, `password_hash`)
VALUES('$name', '$surname', '$phone_num', '$email', '$password')");*/

//$mysql->close();



?>
