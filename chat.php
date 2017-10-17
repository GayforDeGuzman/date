<?php
    session_start();
    if(!isset($_SESSION['usr']) || !isset($_SESSION['id'])){
        header("Location: /date/index.php");
    }
    if(!isset($_GET['chat_id'])){
        header("Location: /date/home.php");
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
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header">Chat</div>
                        <div class="card-body">
                            <div class="message">

                            </div>
                        </div>
                        <div class="card-footer">
                            <form action="" class="form">
                                <div class="input-group">
                                    <input type="text" name="msg" id="msg" class="form-control" placeholder="Message" aria-label="Message">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button" onclick="sendMessage()">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <script src="assets/js/jquery-3.2.0.min.js"></script>
    <script>
        function getMessage(){
            var chat_id = <?php echo $_GET['chat_id'] ?>;
            $.get("assets/php/messages.php", {chat_id}, function(data){
                $('.message').html("");
                var output = "";
                var r = jQuery.parseJSON(data)
                for (i = 0; i < r.length; ++i){
                    //output = r[i].sender + ": " + r[i].message + " (" + r[i].time + ")"
                    output = `<div class="media">
                                    
                                    <small class="text-muted">` + r[i].time + `</small>
                                    <div class="media-body">
                                        ` + r[i].message + `
                                    <img class="d-flex mr-3" src="..." height="64px" width="64px" style="background-color: grey;" alt="` + r[i].sender + `">
                                    </div>
                                    
                                </div>`;
                    $('.message').prepend(output + "<br>");
                }
            });
        }
        

        function sendMessage(){
            var msg = $('#msg').val();
            var receiver = <?php echo $_GET['chat_id'] ?>;

            $.post("assets/php/chat/sendMessage.php", {msg, receiver}, function(data){
                getMessage();
            });
        }
        
        $(document).ready(function (){
            setInterval(function(){
                getMessage();
            }, 1000);
        });
    </script>
</body>
</html>