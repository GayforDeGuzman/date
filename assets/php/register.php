<?php
    //Tignan nantin kung valid ba ang mga variables na kakailanganin niya later.
    if (!isset($_POST['usr']) || !isset($_POST['pwd'])){
        echo "Fail.";
        exit();
    }

    $usr = $_POST['usr'];
    $pwd = hash('sha256', $_POST['pwd']);

    include_once("connect.php");
    
    $query = "SELECT * FROM users WHERE username='$usr'";

    $results = $conn->query($query);
    //Sumagot siya na meron siya <3
    if($results->num_rows > 0){
        
        echo json_encode(["status" => 1]);
    }
    //Sumagot kaso wala siya </3
    else{
        $query = "INSERT INTO users (username, password) VALUES ('$usr', '$pwd')";
        $conn->query($query);
        $query = "SELECT id FROM users WHERE username='$usr'";
        $r = $conn->query($query);
        $id = $r->fetch_assoc();


        session_start();
        $_SESSION['usr'] = $usr;
        $_SESSION['id'] = $id['id'];
        
        echo json_encode(["status" => 0, "usr" => $usr]);
    }
    

?>