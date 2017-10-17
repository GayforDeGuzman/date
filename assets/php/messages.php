<?php
    session_start();
    // function getMessage(){
        $sender = $_SESSION['id'];
        $receiver = $_GET['chat_id'];

        include_once('connect.php');

        $query = "SELECT * FROM chat_log WHERE (sender=$sender AND receiver=$receiver) OR (sender=$receiver AND receiver=$sender)";

        $chat_log_db = $conn->query($query);
        $chatLog = [];
        $count = 0;
        while($message = $chat_log_db->fetch_assoc()){
            //echo $message['senderUser'] . ": " . $message['message'] . "(" . $message['time'] . ") <br>";
            array_push($chatLog, [
                "sender" => $message['senderUser'],
                "message" => $message['message'],
                "time" => $message['time']
            ]);
        }
        echo json_encode($chatLog);
    // }

    // getMessage();
?>