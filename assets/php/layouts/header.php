<header>
    <style>
        .nav-item{
            margin-left: 20px;
        }
        ul li a{
            position: relative;
            text-transform: uppercase;
            transition: .5s;
            padding: 5px 10px;
        }
        ul li a:before{
            content: '';
            position: absolute;
            bottom: 12px;
            left: 12px;
            width: 12px;
            height: 12px;
            border: 3px solid #e91e63;
            border-width: 0 0 3px 3px;
            transition: .5s;
            opacity: 0;
        }
        ul li a:hover:before{
            bottom: 0;
            left: 0;
            opacity: 1;
        }
        ul li a:after{
            content: '';
            position: absolute;
            top: 12px;
            right: 12px;
            width: 12px;
            height: 12px;
            border: 3px solid #e91e63;
            border-width: 3px 3px 0 0;
            transition: .5s;
            opacity: 0;
        }
        ul li a:hover:after{
            top: 0;
            right: 0;
            opacity: 1;
        }
    </style>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FEB58A;">
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
                    <a class="nav-link" href="home.php">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <li class="nav-item dropdown">
                    <li class="nav-item">
                        <?php
                            if(isset($_SESSION['usr'])){
                                echo "
                                    <a class='nav-link dropdown-toggle' href='#' id='profileDropdown' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    $usr
                                    </a>
                                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink'>
                                        <h6 class='dropdown-header'>Signed in as: <b>$usr</b></h6>
                                        <div class='dropdown-divider'></div>
                                        <a class='dropdown-item' href='assets/php/logout.php'>
                                            Logout
                                        </a>
                                    </div>
                                ";
                            }else{
                                echo "
                                    <a href=\"login.html\" class=\"nav-link\">
                                        <span class=\"oi oi-account-login\"></span>
                                        Login
                                    </a>
                                ";
                            }
                        ?>
                    </li>
                </li>
            </ul>
        </div>
    </nav>
</header>