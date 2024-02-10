<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ireg";

$conection = new mysqli($servername, $username, $password, $dbname);

if(!$conection){
    die("connection failed" . mysqli_connect_error());
};

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $sql = "INSERT INTO registered (email, name, phone, city, state) VALUES('$email', '$name', '$phone', '$city', '$state')";

    if($conection->query($sql)==TRUE){
        echo "New record created successfully";
        header("Location: /IND/submit.html");
        
    
    
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}





