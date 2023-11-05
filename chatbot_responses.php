<?php
require_once('includes/connection.php');
require_once('includes/functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userMessage = $_POST['userMessage'];
    $userID = $_POST['userID'];

    $botResponse = processUserMessage($userMessage);
    saveConversation($userMessage, $botResponse, $userID);

    echo json_encode(['botResponse' => $botResponse]);
}
