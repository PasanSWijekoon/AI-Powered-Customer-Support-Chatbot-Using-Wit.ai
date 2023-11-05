<?php
require_once('includes/connection.php');

$userName = $_POST["username"];
$email =  $_POST["email"];
$password =  $_POST["password"];

if(empty($userName)){
    echo ("Please enter your First Name !!!");
}else if (empty($email)){
    echo ("Please enter your Email !!!");
}else if(strlen($email) >= 100){
    echo ("Email must have less than 100 characters");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email !!!");
}else if (empty($password)){
    echo ("Please enter your Password !!!");
}else if(strlen($password) < 5 || strlen($password) > 20){
    echo ("Password must be between 5 - 20 charcters");
}else{

    $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
    $num = $rs->num_rows;
    
    if ($num > 0) {
    
        echo ("User with the same Email or Mobile already exists.");

    } else {
    
        Database::iud("INSERT INTO `user` (`userName`,`password`,`email`) 
        VALUES ('" . $userName . "','" . $password . "','" . $email . "')");
    
        header("Location: chat.php");
    }

    
}

