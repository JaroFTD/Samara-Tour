<?php

// servername => localhost
// username => root
// password => ""
// database name => travel
$conn = mysqli_connect("localhost", "root", "", "travel");

// Проверка подключения
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Взятие всех 4 значений из данных формы contacts.php
$name =  $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$email =  $_REQUEST['email'];
$message = $_REQUEST['message'];

if(isset($name)){
    // Выполнение запроса insert
    // здесь имя нашей таблицы callback
    $sql = "INSERT INTO callback  VALUES ('$name', 
        '$surname','$email','$message')";
}

// Взятие всех 8 значений из данных формы index.php
$tname =  $_REQUEST['tname'];
$temail =  $_REQUEST['temail'];
$tphone = $_REQUEST['tphone'];
$tdirection = $_REQUEST['tdirection'];
$tdays = $_REQUEST['tdays'];
$ttourists = $_REQUEST['ttourists'];
$tagreement = $_REQUEST['tagreement'];
$tmessage = $_REQUEST['tmessage'];

if(isset($tname)){
    // Выполнение запроса insert
    // здесь имя нашей таблицы addtours
    $sql = "INSERT INTO addtours  VALUES ('$tname', 
        '$temail','$tphone','$tdirection','$tdays','$ttourists','$tmessage','$tagreement')";
    
}

// Взятие всех 5 значений из данных формы about-tour.php
$bname =  $_REQUEST['bname'];
$bemail =  $_REQUEST['bemail'];
$bphone = $_REQUEST['bphone'];
$btours = $_REQUEST['btours'];
$bmessage = $_REQUEST['bmessage'];

if(isset($bname)){
    // Выполнение запроса insert
    // здесь имя нашей таблицы booking
    $sql = "INSERT INTO booking  VALUES ('$bname', 
        '$bemail','$bphone','$btours','$bmessage')";
}

if(mysqli_query($conn, $sql)){
    $message = 'yes';
} else{
    $message = 'no';
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

$response = array('message' => $message);

header('Content-type: application/json');
echo json_encode($response);

// Отключаемся
mysqli_close($conn);
?>