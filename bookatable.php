<?php 
print_r($_POST);
$name = $_POST['name']; // retrieve the values
$surname = $_POST['surname']; 
$phone_num = $_POST['phone_num'];
$seats_num = $_POST['seats_num'];
$date = $_POST['date'];
$time = $_POST['time'];

// validation checks on submitted data
if (empty($name)){
    die("Name is required"); // stop execution
}
if (empty($surname)){
    die("Surname is required");
}
if (empty($phone_num)){
    die("Phone number is required");
}
if (empty($seats_num)){
    die("Number of seats required");
}
if (empty($date)){
    die("Date is required");
}
if (empty($time)){
    die("Time is required");
}

// if($seats_num > 20) {
//     die("Maximum number of seats is 20");
// }

// Convert the date string to a date object
$date_obj = date_create($date);
if (!$date_obj) {
    die("Invalid date format");
}

$mysqli = new mysqli('localhost', 'itech174', 'Fe7@bwZWgAqV', 'itech174'); //connection to db

$sql = "INSERT INTO bookings (name, surname, phone_num, seats_num, date, time)
 VALUES(?, ?, ?, ?, ?, ?)";

 $stmt = $mysqli->stmt_init();
 if(! $stmt->prepare($sql)){ // prepare the sql query
    die("SQL error: " . $mysqli->error);
 }

$stmt->bind_param("sssiss",$name, $surname, $phone_num, $seats_num, $date, $time); // binds the values, (dtypes, values)

if($stmt->execute()){ // successfuly executed
    header("Location: booking-success.html"); // redirect
    exit();
} else {
    if($mysqli->errno === 1062) { // duplicate entry
        die("Duplicate entry");
    }
    die($mysqli->error. " " . $mysqli->errno); // output the error
}


?>
