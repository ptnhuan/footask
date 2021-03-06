<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content e-commerce</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-6.less', 'css/type-6.css');
        ?>
        <link rel="stylesheet" href="css/type-6.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/collapse-close.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Top Profiles
                                    <small>Sessions</small>
                                </h2>
                                <ul class="items">
                                    <li>
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Settings 1</a></li>
                                            <li><a href="#">Settings 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="close-link">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Top Profiles
                                    <small>Sessions</small>
                                </h2>
                                <ul class="items">
                                    <li>
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Settings 1</a></li>
                                            <li><a href="#">Settings 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="close-link">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Top Profiles
                                    <small>Sessions</small>
                                </h2>
                                <ul class="items">
                                    <li>
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Settings 1</a></li>
                                            <li><a href="#">Settings 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="close-link">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <a class="date">
                                        <p class="month">
                                            April
                                        </p>
                                        <p class="day">
                                            23
                                        </p>
                                    </a>
                                    <div class="items-info">
                                        <a class="title" href="#">Item One Title</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>