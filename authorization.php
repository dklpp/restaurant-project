<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mysql = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174');
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' 
    AND `pasword`= '$password'");
    $user = $result->fetch_assoc();
    if(count($user)== 0){
        echo "User not found";
        exit();
    }
    setcookie('user', $user['name'], time() + 3600, "/");
 
    

    $mysql->close();

    header('Location: /');
?>