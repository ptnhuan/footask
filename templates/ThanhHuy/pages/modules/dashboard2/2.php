<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Top navigation dashboard2</title>
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/dashboard2/2.less', '../../css/dashboard2/2.css');
        ?>
        <link href="../../css/dashboard2/2.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/dashboard2/2/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/2/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type-2">
            <div class="container">
                <div class="top-nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="toggle">
                                <a href="#"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="../../images/img.jpg" alt="">John Doe
                                        <i class="fa fa-angle-down"></i>
                                    </a>


                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Profile</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>Settings</span>
                                                <span class="badge">50%</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Help</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Logout<i class="fa fa-sign-out"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle info-number" data-toggle="dropdown">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge">6</span>
                                    </a>

                                    <ul class="dropdown-menu msg_list">
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="../../images/img.jpg" alt="Profile image">
                                                </span>
                                                <span>
                                                    <span class="name">John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="msg">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="../../images/img.jpg" alt="Profile image">
                                                </span>
                                                <span>
                                                    <span class="name">John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="msg">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image">
                                                    <img src="../../images/img.jpg" alt="Profile image">
                                                </span>
                                                <span>
                                                    <span class="name">John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="msg">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a href="#">
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>                        
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>