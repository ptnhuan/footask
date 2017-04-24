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
        $less->compileFile('less/type-10.less', 'css/type-10.css');
        ?>
        <link rel="stylesheet" href="css/type-10.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/canvasjs.min.js" type="text/javascript"></script>
        <script src="js/chart-pie.js" type="text/javascript"></script>
        <script src="js/collapse-close.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    App Devices 
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
                                <h4>App Versions</h4>
                                <div class="widget_summary">
                                    <div class="w_left">
                                        <span>1.5.2</span>
                                    </div>
                                    <div class="w_center">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w_right">
                                        <span>123k</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="widget_summary">
                                    <div class="w_left">
                                        <span>1.5.3</span>
                                    </div>
                                    <div class="w_center">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w_right">
                                        <span>53k</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget_summary">
                                    <div class="w_left">
                                        <span>1.5.4</span>
                                    </div>
                                    <div class="w_center">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w_right">
                                        <span>23k</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget_summary">
                                    <div class="w_left">
                                        <span>1.5.5</span>
                                    </div>
                                    <div class="w_center">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w_right">
                                        <span>3k</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget_summary">
                                    <div class="w_left">
                                        <span>0.1.5.6</span>
                                    </div>
                                    <div class="w_center">
                                        <div class="progress">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w_right">
                                        <span>1k</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Daily users
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
                                <table class="" style="width:100%">
                                    <tbody><tr>
                                            <th style="width:37%;">
                                                <p>Top 5</p>
                                            </th>
                                            <th>
                                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                    <p class="">Device</p>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                    <p class="">Progress</p>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="chartPieContainer"></div>

                                            </td>
                                            <td>
                                                <table class="tile_info">
                                                    <tbody><tr>
                                                            <td>
                                                                <p><i class="fa fa-square blue"></i>IOS </p>
                                                            </td>
                                                            <td>30%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square red"></i>Android </p>
                                                            </td>
                                                            <td>10%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square black"></i>Blackberry </p>
                                                            </td>
                                                            <td>20%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square gray"></i>Symbian </p>
                                                            </td>
                                                            <td>15%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square orange"></i>Others </p>
                                                            </td>
                                                            <td>30%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Profile Setting
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
                                <ul class="quick-list">
                                    <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a></li>
                                    <li><i class="fa fa-thumbs-up"></i><a href="#">Favorites</a></li>
                                    <li><i class="fa fa-calendar-o"></i><a href="#">Activities</a></li>
                                    <li><i class="fa fa-cog"></i><a href="#">Settings</a></li>
                                    <li><i class="fa fa-area-chart"></i><a href="#">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>