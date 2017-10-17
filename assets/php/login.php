<?php
    //Tignan nantin kung valid ba ang mga variables na kakailanganin niya later.
    if (!isset($_POST['usr']) || !isset($_POST['pwd'])){
        echo "Fail.";
        exit();
    }

    //Kinukuha niya ang mga variables na binigay sa kanya.
    $usr = $_POST['usr'];
    $pwd = hash('sha256', $_POST['pwd']);

    //Okay since valid ang transaction, tawagin natin si connect.php
    include_once('connect.php');

    //Let's say na ang $query ay ang phone number na tatawagan mo.
    $query = "SELECT * FROM users WHERE username='$usr' AND password='$pwd'";

    //Object oriented to, since $conn is an object.
    $login = $conn->query($query);

    //Sumagot siya na meron siya <3
    if($login->num_rows == 1){
        session_start();
        $_SESSION['usr'] = $usr;
        $_SESSION['id'] = $login->fetch_object()->id;
        echo json_encode(["status" => 1, "usr" => $usr]);
    }
    //Sumagot kaso wala siya </3
    else{
        echo json_encode(["status" => 0]);
    }
?>