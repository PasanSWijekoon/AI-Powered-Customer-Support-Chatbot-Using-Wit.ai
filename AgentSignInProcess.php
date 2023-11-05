<?php
require_once('includes/connection.php');

$email = "agent1@gmail.com";
$password = "12345";

$rs = Database::search("SELECT * FROM `agent` WHERE `email_agent`='" . $email . "'");
$num = $rs->num_rows;

if ($num > 0) {

    $data = $rs->fetch_assoc();

    if ($data["email_agent"]  == $email && $data["pass"] == $password) {
        echo "succes";
    }
} else {
    echo "Not Registered Email";
}
