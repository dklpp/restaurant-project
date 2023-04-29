<?php 
$name = $_POST['name'];
/*filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);*/
$surname = $_POST['surname']; 
$phone_num = $_POST['phone_num'];
$email = $_POST['email'];
$password = $_POST['password'];

/*if(mb_strlen($name) < 2 || mb_strlen($name) > 50) {
    echo "Unacceptable length of name!";
    exit();
} else if (mb_strlen($surname) < 2 || mb_strlen($surname) > 50){
    echo "Unacceptable length of surname!";
    exit();
} else if (mb_strlen($phone_num) < 2 || mb_strlen($phone_num) > 20){
    echo "Unacceptable length of phone number!";
    exit();
} else if (mb_strlen($email) < 2 || mb_strlen($email) > 20) {
    echo "Unacceptable length of email!";
    exit();
} else if (mb_strlen($password) < 2 || mb_strlen($password) > 20){
    echo "Unacceptable length of , password must be AT LEAST 4 characters and AT MAXIMUM 12!";
    exit();
}*/

//$password = md5($password); //hash of password

$mysql = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');
$mysql->query("INSERT INTO `users` (`name`, `surname`, `phone_num`, `email`, `password`)
VALUES('$name', '$surname', '$phone_num', '$email', '$password')");

$mysql->close();

header('Location: /');

?>
