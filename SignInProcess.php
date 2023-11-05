<?php
session_start();
require_once('includes/connection.php');

$email = $_POST["email"];
$password = $_POST["password"];

$rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
$num = $rs->num_rows;

if ($num > 0) {

    $data = $rs->fetch_assoc();

    if ($data["email"]  == $email && $data["password"] == $password) {
        $_SESSION["u"] = $data;
        header("Location: chat.php");
    }else{
        echo "Invalid email or password";
    }
} else {
    echo "Not Registered Email";
}
