<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/25-47.less', 'css/25-47.css');
        ?>
        <link href="css/25-47.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-element-16.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-47">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10"> 
                        <div class="col-md-6"></div>
                             <div class="row content16">
                                <div class="col-md-6">
                                    <div class="x_panel16">
                                        <div class="x_title">
                                            <h2>Daily active users <small>Sessions</small></h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a data-toggle="collapse"href="#element16"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a id="close-link16"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="element16">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="img">
                                                        </span>
                                                        <span>
                                                            <span>John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="message">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="img">
                                                        </span>
                                                        <span>
                                                            <span>John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="message">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="img">
                                                        </span>
                                                        <span>
                                                            <span>John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="message">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        <span class="image">
                                                            <img src="images/img.jpg" alt="img">
                                                        </span>
                                                        <span>
                                                            <span>John Smith</span>
                                                            <span class="time">3 mins ago</span>
                                                        </span>
                                                        <span class="message">
                                                            Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
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