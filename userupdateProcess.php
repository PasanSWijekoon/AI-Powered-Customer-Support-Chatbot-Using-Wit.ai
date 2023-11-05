<?php

require_once('includes/connection.php');

session_start();

if (isset($_SESSION["u"])) {

    $json = $_POST["json"];
    $jsonToObj = json_decode($json);

    $uname = $jsonToObj->uname;
    $email = $jsonToObj->email;
    $pw = $jsonToObj->pw;

    $foodphoto = null;

    if (isset($_FILES["img"])) {
        $image = $_FILES["img"];
        // echo ($image);

        $allowed_image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");
        $file_ex = $image["type"];

        if (!in_array($file_ex, $allowed_image_extentions)) {
            echo ("Please select a valid image.");
        } else {

            $new_file_extention;

            if ($file_ex == "image/jpg") {
                $new_file_extention = ".jpg";
            } else if ($file_ex == "image/jpeg") {
                $new_file_extention = ".jpg";
            } else if ($file_ex == "image/png") {
                $new_file_extention = ".jpg";
            } else if ($file_ex == "image/svg+xml") {
                $new_file_extention = ".jpg";
            }

            $imag = "image/" . uniqid() . $new_file_extention;

            // echo ($profilephoto1);

            move_uploaded_file($image["tmp_name"], $imag);
            Database::iud("UPDATE `user` SET  `img_path`='" . $imag . "' WHERE `user_id`='" . $_SESSION["u"]["user_id"] . "' ");
        }
    }

    Database::iud("UPDATE `user` SET `email`='" . $email . "', `userName`='" . $uname . "', `password`='" . $pw . "'  WHERE `user_id`='" . $_SESSION["u"]["user_id"] . "' ");

    echo ("ok");
}
