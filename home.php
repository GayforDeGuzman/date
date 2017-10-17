<?php
    session_start();
    if(!isset($_SESSION['usr']) || !isset($_SESSION['id'])){
        header("Location: /date/index.php");
    }
    $id = $_SESSION['id'];
    $usr = $_SESSION['usr'];
    include_once('assets/php/connect.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lickedit.css">
</head>

<body>
    <?php include_once('assets/php/layouts/header.php'); ?>
    <main>
        <div class="container">
            <div class="row">
                <!-- <div class="col-12">
                    <form action="" class="form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter what you are seeking for...">
                        </div>
                        
                    </form>
                </div> -->
                
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">Recommendations</div>
                        <div class="card-body">
                            TBA
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center">
                                <?php echo "@" . $_SESSION['usr']; ?>
                            </h4>
                            <hr>
                            <h6>Seeking:</h6>
                            <p>
                                <?php
                                    $results = $conn->query("SELECT * FROM `user_info` WHERE id=" . $id);
                                    $r = $results->fetch_assoc();
                                    $seeking = explode(",", $r['user_seeking_tag']);

                                    foreach($seeking as $seek){
                                        echo "$seek ";
                                    }

                                ?>
                            </p>
                        </div>
                    </div>
                    <ul class="list-group" style="padding-top: 30px">
                        <li class="list-group-item text-center">Chat</li>
                        <a href="chat.php?chat_id=2" class="list-group-item list-group-item-action">User</a>
                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    

    <script src="assets/js/jquery-3.2.0.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lickedit.js"></script>

</body>

</html>