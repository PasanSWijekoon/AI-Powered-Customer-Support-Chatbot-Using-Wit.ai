<?php

if (isset($_GET["uid"])) {

    require_once('includes/connection.php');

    $userID = $_GET["uid"];
    $data = []; // Initialize an empty array to store data

    $rs = Database::search("SELECT * FROM `history_with_agent` WHERE `user_user_id` = '" . $userID . "' AND `agent_agent_id` = '1'");

    // if ($rs) {
    //     while ($row = $rs->fetch_assoc()) {
    //         // Append each row to the $data array
    //         $data[] = $row;
    //     }
    // }

    for($x = 0; $x < $rs->num_rows; $x ++){

        $data = $rs->fetch_assoc();
    }

    echo $data["user_user_id"];

    // Encode the $data array as JSON
    // echo json_encode($data);
}
