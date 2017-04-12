<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Page content 2 dashboard2</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/dashboard2/4.less', '../../css/dashboard2/4.css');
        ?>
        <link href="../../css/dashboard2/4.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/dashboard2/4/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/canvasjs.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/chart-rain.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/close-panel.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/collapse-panel.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/jquery-ui.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard2/4/datetimepicker.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Transaction Summary
                                    <small>Weekly progress</small>
                                </h2>
                                <div class="filter-time">
                                    <div class="show-calendar">
                                        <i class="fa fa-calendar"></i> <input type="text" id="datepicker" placeholder="Click view date">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <div class="col-md-9">
                                    <div id="chartRainContainer"></div>
                                    <div class="total-chart">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <span>Total Sessions</span>
                                            <h2>231,809</h2>
                                            <div id="chartCoalContainer2"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <span>Total Revenue</span>
                                            <h2>231,809</h2>
                                            <div id="chartCoalContainer3"></div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <span>Total Sessions</span>
                                            <h2>231,809</h2>
                                            <div id="chartCoalContainer4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <div class="admin-title">
                                        <h2>Top Profiles</h2>
                                        <ul class="profile-user">
                                            <li>
                                                <a class="toggled" id="collapse-link">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" data-toggle="dropdown">
                                                    <i class="fa fa-wrench"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Settings 1</a></li>
                                                    <li><a href="#">Settings 2</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="toggled" id="close-link">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>

                                    </div>
                                    <ul class="profiles-user">
                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="profile-thumb">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <div class="profile-comment">
                                                <a class="title" href="#">
                                                    Ms.Mary Jane
                                                </a>
                                                <p>
                                                    <strong>$2300. </strong>
                                                    <span>Agent Avarage Sales</span>
                                                </p>
                                                <p>
                                                    <small>12 Sales Today</small>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>