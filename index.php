<?php
    session_start();
    if(isset($_SESSION['usr']) && isset($_SESSION['id'])){
        header("Location: /date/home");
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link href='assets/css/rotating-card.css' rel='stylesheet' />
        <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/lickedit.css">
    </head>

    <body>
        <header>
            <!-- NAVIGATION  #FEB58A;-->
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/licked.png" width="30" height="30" alt=""> LICKed-IT.com
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <li class="nav-item">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#login">
                                    Login
                                </button>
                            </li>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <!-- CONTENT -->
            <div class="container-fluid" style="height: 91vh; background-color: black; padding-top:110px; padding-left: 450px;">
                <!--<p id="p1">Welcome to</p>
                <img src="assets/img/licked.png" alt="" style="position: right; padding: 30px; padding-top: 60px;" />
                <ul class="letters">
                    <li>L</li>
                    <li>I</li>
                    <li>C</li>
                    <li>K</li>
                    <li>e</li>
                    <li>d</li>
                    <li>-</li>
                    <li>I</li>
                    <li>T</li>
                    </ul>
                    <p id="p2">Made for better love.</p>-->
                    <p style="font-size:20pt; color: white; padding-left:130px;">Made for Love</p>
                    <div class="col-lg-6">
                        <div class="card secondcol">
                            <div class="card-body" style="text-align:left; padding-left:3em; padding-right:3em;">
                                <form id="register">
                                    <div class="form-group" novalidate>
                                        <label for="">@Username</label>
                                        <input name="usr" id="usr" type="text" placeholder="Username" class="form-control" style="width: 20em;" required>
                                        <div class="invalid-feedback" id="usr-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input name="pwd" id="pwd" type="password" class="form-control" placeholder="Password" style="width: 20em;">
                                        <div class="invalid-feedback" id="pwd-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Confirm password</label>
                                        <input name="pwd2" id="pwd2" type="password" class="form-control" placeholder="Confirm password">
                                        <div class="invalid-feedback">
                                            Please match the passwords.
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <a href="login form new.html" class="btn btn-danger btn-block">Sign up for LICKed-IT</a> -->
                                        <a class="btn btn-danger btn-block" href="javascript:validate()">Sign up for LICKed-IT</a>
                                        <small class="form-text text-muted text-center">By clicking this button, you are agree to the Terms and Conditions.</small>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <div class="jumbotron" style="height: 100%; margin:0; padding:0; background-color: white;">
                <!-- Signup container -->
                <div class="container row2">
                    <div class="row">
                        <div class="col-lg-5 firstcol">
                            <p style="font-size: 18pt; font-family: arial;">Be one of the users who found true love with LICKed-IT, made for better love.</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="assets/img/dating.jpg" alt="" style="width:105vh; height: 70vh;">
                        </div>
                    </div>
                </div>
                <div class="container row3" style="padding-top: 5em;">
                    <div class="row">
                        <div class="col-lg-5 firstcol2">
                            
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 secondcol2">
                        <p style="font-size: 18pt; font-family: arial;">Interact with interesting people from across the country.</p>
                        </div>
                    </div>
                </div>
                <div class="row4" style="padding-top: 20em;">
                    <div class="row">
                        <div class="col-lg-5 firstcol3" style="margin-left: 100px;">
                        <p style="font-size: 18pt; font-family: arial;">Flirt the one that catches your eyes and if you got a flirt back, then your ready for a real deal.</p
                        <p style="font-size: 18pt; font-family: arial;">Only the people who flirted you back can message you.
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 secondcol3">
                        
                        </div>
                    </div>

                </div>
            </div>
        </main>
        <footer style="margin-top: 100px;">
            <!-- FOOTER -->
            <p class="text-center"> Copyright © LICKed-IT.com 2017. All right reserved. </p>
        </footer>
        

        <!-- Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log-In Now</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 login-sec">
                                    
                                    <form class="login-form" action="javascript:login()">
                                        <div class="form-group">
                                            <label for="" class="text-uppercase">Username</label>
                                            <input type="text" id="usr" class="form-control" placeholder="">

                                        </div>
                                        <div class="form-group">
                                            <label for="" class="text-uppercase">Password</label>
                                            <input type="password" id="pwd" class="form-control" placeholder="">
                                        </div>


                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                <small>Remember Me</small>
                                            </label>
                                            <br>
                                            <button type="submit" class="btn btn-login float-right">Submit</button>
                                        </div>

                                    </form>
                                </div>
                                <div class="col-md-8 banner-sec">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block modalimg" src="assets/img/lick.jpg" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">

                                                    <div class="banner-text">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="assets/img/dating.jpg" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <div class="banner-text">
                                                        <h2></h2>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="assets/img/dating2.jpg" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <div class="banner-text">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            </section>
                            <script src="assets/js/jquery-3.2.0.min.js"></script>
                            <script src="assets/js/popper.js"></script>
                            <script src="assets/js/bootstrap.min.js"></script>

                            <script>
                                function login() {
                                    var usr = $("#usr").val();
                                    var pwd = $("#pwd").val();

                                    $.post("/lickit/assets/scripts/php/login.php", {
                                        usr,
                                        pwd
                                    }, function (data) {
                                        var response = jQuery.parseJSON(data);
                                        if (response.status == 1) {
                                            alert("Welcome!");
                                            window.location = "/lickit/home.html"
                                        } else {
                                            alert("Error!");
                                        }
                                    });
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS -->
        <script src="assets/js/jquery-3.2.0.min.js"></script>
        <script src="assets/js/lickedit.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

    </body>

    </html>