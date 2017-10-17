<?php
    session_start();
    if(!isset($_SESSION['usr']) || !isset($_SESSION['id'])){
        header("Location: /date/index.php");
    }
    if(!isset($_GET['chat_id'])){
        header("Location: /date/home.php");
    }
    if(!isset($_POST['msg']) || !isset($_POST['receiver'])){
        header("Location: /date/chat.php");
    }
    $s = $_SESSION['id'];
    $usr = $_SESSION['usr'];
    $r = $_POST['receiver'];
    $m = $_POST['msg'];
    include_once('../connect.php');

    $query = "INSERT INTO chat (sender, receiver, message) VALUES ($s, $r, '$m')";
    $conn->query($query);

    echo "LOL";

?>