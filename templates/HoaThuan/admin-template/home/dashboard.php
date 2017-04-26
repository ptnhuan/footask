<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
        <link href="css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/dashboard.less', 'css/dashboard.css');
        ?>
        <link href="css/dashboard.css" rel="stylesheet" type="text/css"/> 
        <script src="js/dashboard/jquery.min.js" type="text/javascript"></script>
        <script src="js/dashboard/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/dashboard/side-bar.js" type="text/javascript"></script>
        <script src="js/dashboard/Chart.min.js" type="text/javascript"></script>
        <script src="js/dashboard/skycons.js" type="text/javascript"></script>
        <script src="js/dashboard/jquery.vmap.js" type="text/javascript"></script>
        <script src="js/dashboard/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="js/dashboard/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="js/dashboard/gauge.min.js" type="text/javascript"></script>
        <script src="js/dashboard/jquery.flot.js" type="text/javascript"></script>
        <script src="js/dashboard/jquery.flot.time.js" type="text/javascript"></script>
        <script src="js/dashboard/jquery.flot.spline.min.js" type="text/javascript"></script>
        <script src="js/dashboard/date.js" type="text/javascript"></script>
        <script src="js/dashboard/moment.min.js" type="text/javascript"></script>
        <script src="js/dashboard/daterangepicker.js" type="text/javascript"></script>
        <script src="js/dashboard/custom.min.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-25">
            <div class="container-fluid">
                <div class="row main nav-md">
                    <div class="col-md-3 left_col">
                        <div class="scroll-view">
                            <div class="navbar nav_title">
                                <a href="dashboard.php" class="site_title">
                                    <i class="fa fa-paw"></i>
                                    <span>Gentelella Alela!</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <!-- Profile -->
                            <div class="profile clearfix">
                                <div class="profile_pic">
                                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                                </div>
                                <div class="profile_info">
                                    <span>Welcome,</span>
                                    <h2>John Doe</h2>
                                </div>
                            </div>
                            <!-- End Profile -->
                            <br>
                            <!-- Sidebar Menu -->
                            <div class="main_menu">
                                <div class="menu_section">
                                    <h3>General</h3>
                                    <ul class="nav side-menu panel-group" id="accordionGeneral">
                                        <li class="panel panel-default"><a data-toggle="collapse" data-parent="#accordionGeneral" href="#nav-home"><i class="fa fa-home"></i> Home <span class="down fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu collapse" id="nav-home">
                                                <li><a href="dashboard.php">Dashboard</a></li>
                                                <li><a href="">Dashboard2</a></li>
                                                <li><a href="#">Dashboard3</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default"><a data-toggle="collapse" data-parent="#accordionGeneral" href="#nav-forms"><i class="fa fa-edit"></i> Forms <span class="down fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu collapse" id="nav-forms">
                                                <li><a href="general_form.php">General Form</a></li>
                                                <li><a href="#">Advanced Components</a></li>
                                                <li><a href="form_validation.php">Form Validation</a></li>
                                                <li><a href="form_wizard.php">Form Wizard</a></li>
                                                <li><a href="form_upload.php">Form Upload</a></li>
                                                <li><a href="form_button.php">Form Buttons</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default"><a data-toggle="collapse" data-parent="#accordionGeneral" href="#nav-ui"><i class="fa fa-desktop"></i> UI Elements <span class="down fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu collapse" id="nav-ui">
                                                <li><a href="general_element.php">General Elements</a></li>
                                                <li><a href="media.php">Media Gallery</a></li>
                                                <li><a href="typography.php">Typography</a></li>
                                                <li><a href="icon.php">Icons</a></li>
                                                <li><a href="#">Glyphicons</a></li>
                                                <li><a href="#">Widgets</a></li>
                                                <li><a href="#">Invoice</a></li>
                                                <li><a href="#">Inbox</a></li>
                                                <li><a href="#">Calendar</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default"><a data-toggle="collapse" data-parent="#accordionGeneral" href="#nav-tables"><i class="fa fa-table"></i> Tables <span class="down fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu collapse" id="nav-tables">
                                                <li><a href="#">Tables</a></li>
                                                <li><a href="#">Table Dynamic</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default"><a data-toggle="collapse" data-parent="#accordionGeneral" href="#nav-data"><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="down fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu collapse" id="nav-data">
                                                <li><a href="#">Chart JS</a></li>
                                                <li><a href="#">Chart JS2</a></li>
                                                <li><a href="#">Moris JS</a></li>
                                                <li><a href="#">ECharts</a></li>
                                                <li><a href="#">Other Charts</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default"><a data-toggle="collapse" data-parent="#accordionGeneral" href="#nav-layouts"><i class="fa fa-clone"></i>Layouts <span class="down fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu collapse" id="nav-layouts">
                                                <li><a href="#">Fixed Sidebar</a></li>
                                                <li><a href="#">Fixed Footer</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="menu_section">
                                    <h3>Live On</h3>
                                    <ul class="nav side-menu panel-group" id="accordionLive">
                                        <li class="panel panel-default"><a data-toggle="collapse" data-parent="#accordionLive" href="#nav-pages"><i class="fa fa-bug"></i> Additional Pages <span class="down fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu collapse" id="nav-pages">
                                                <li><a href="#">E-commerce</a></li>
                                                <li><a href="#">Projects</a></li>
                                                <li><a href="#">Project Detail</a></li>
                                                <li><a href="#">Contacts</a></li>
                                                <li><a href="#">Profile</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default"><a data-toggle="collapse" data-parent="#accordionLive" href="#nav-ex"><i class="fa fa-windows"></i> Extras <span class="down fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu collapse" id="nav-ex">
                                                <li><a href="#">403 Error</a></li>
                                                <li><a href="#">404 Error</a></li>
                                                <li><a href="#">500 Error</a></li>
                                                <li><a href="#">Plain Page</a></li>
                                                <li><a href="#">Login Page</a></li>
                                                <li><a href="#">Pricing Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default"><a data-toggle="collapse" data-parent="#accordionLive" href="#nav-multilevel"><i class="fa fa-sitemap"></i> Multilevel Menu <span class="down fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu collapse" id="nav-multilevel">
                                                <li><a href="#level1_1">Level One</a>
                                                </li><li><a data-toggle="collapse" href="#nav-levelOne">Level One<span class="fa fa-chevron-down"></span></a>
                                                    <ul class="nav child_menu collapse" id="nav-levelOne">
                                                        <li><a href="level2.html">Level Two</a></li>
                                                        <li><a href="#level2_1">Level Two</a></li>
                                                        <li><a href="#level2_2">Level Two</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#level1_2">Level One</a></li>
                                            </ul>
                                        </li>                  
                                        <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- End Sidebar Menu -->
                            <!-- Menu Footer-->
                            <div class="sidebar-footer hidden-small">
                                <a href="#" class="sidebar "data-placement="top" title="Settings">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                </a>
                                <a href="#" class="sidebar "data-placement="top" title="FullScreen">
                                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                </a>
                                <a href="#" class="sidebar "data-placement="top" title="Lock">
                                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                                </a>
                                <a href="#" class="sidebar "data-placement="top" title="Logout">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                </a>
                            </div>
                            <!-- End Menu Footer-->
                        </div>
                    </div><!-- End Col-Left -->
                    <!-- Top NAV -->
                    <div class="top_nav">
                        <div class="nav_menu">
                            <nav>
                                <div class="nav toggle">
                                    <a id="btn_menu"><i class="fa fa-bars"></i></a>
                                </div>
                                <ul class="nav navbar-nav navbar-right" style="height: 50px;">
                                    <!--...........................................-->
                                </ul>
                            </nav>
                        </div>
                    </div><!-- End Top_nav-->
                    <div class="clearfix"></div>
                    <div class="right-col">
                        <div class="content1">
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-user"></i> Total Users
                                </span>
                                <div class="count">2500</div>
                                <span>
                                    <i class="green">4% </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-clock-o"></i> Average Time
                                </span>
                                <div class="count">123.50</div>
                                <span>
                                    <i class="green">
                                        <i class="fa fa-sort-asc"></i>3% 
                                    </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-user"></i> Total Males
                                </span>
                                <div class="count green">2,500</div>
                                <span>
                                    <i class="green">
                                        <i class="fa fa-sort-asc"></i>34% 
                                    </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-user"></i> Total Females
                                </span>
                                <div class="count">4,567</div>
                                <span>
                                    <i class="red">
                                        <i class="fa fa-sort-desc"></i>12% 
                                    </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-user"></i> Total Collections
                                </span>
                                <div class="count">2,315</div>
                                <span>
                                    <i class="green">
                                        <i class="fa fa-sort-asc"></i>34% 
                                    </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count last">
                                <span>
                                    <i class="fa fa-user"></i> Total Connections
                                </span>
                                <div class="count">7,325</div>
                                <span>
                                    <i class="green">
                                        <i class="fa fa-sort-asc"></i>34% 
                                    </i> From last Week
                                </span>
                            </div>

                        </div>                      
                        <div class="content2">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="dashboard_graph">
                                    <div class="row x_title">
                                        <div class="col-md-6">
                                            <h3>Network Activities <small>Graph title sub-title</small></h3>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="reportrange">
                                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                <span>February 3, 2017 - March 4, 2017</span> <b class="caret"></b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div id="chart_plot_01" class="demo-placeholder" style="padding: 0px; position: relative;">
                                            <canvas class="flot-base"></canvas>
                                            <div class="flot-text">
                                                <div class="flot-x1-axis">
                                                    <span class="flot-tick-label flot1" >Jan 01</span>>
                                                    <span class="flot-tick-label flot2">Jan 02</span>>
                                                    <span class="flot-tick-label flot3">Jan 03</span>>
                                                    <span class="flot-tick-label flot4">Jan 04</span>>
                                                    <span class="flot-tick-label flot5" >Jan 05</span>>
                                                    <span class="flot-tick-label flot6">Jan 06</span>

                                                </div>

                                                <div class="flot-y1-axis">
                                                    <span class="flot-tick-label tick1">0</span>
                                                    <span class="flot-tick-label tick2">10</span>
                                                    <span class="flot-tick-label tick3">20</span>
                                                    <span class="flot-tick-label tick4" >30</span>
                                                    <span class="flot-tick-label tick5" >40</span>
                                                    <span class="flot-tick-label tick6 " >50</span>
                                                    <span class="flot-tick-label tick7" >60</span>
                                                    <span class="flot-tick-label tick8" >70</span>
                                                    <span class="flot-tick-label tick9">80</span>
                                                    <span class="flot-tick-label tick10" >90</span>
                                                    <span class="flot-tick-label tick11" >100</span>
                                                    <span class="flot-tick-label tick12">110</span>
                                                    <span class="flot-tick-label tick13" >120</span>
                                                    <span class="flot-tick-label tick14">130</span>
                                                </div>                                       
                                            </div>
                                            <canvas class="flot-overlay"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                                        <div class="x_title">
                                            <h2>Top Campaign Performance</h2>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-6">
                                            <div>
                                                <p>Facebook Campaign</p>
                                                <div class="">
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80" aria-valuenow="79" style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Twitter Campaign</p>
                                                <div class="">
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" aria-valuenow="59" style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-6">
                                            <div>
                                                <p>Conventional Media</p>
                                                <div class="">
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" aria-valuenow="39" style="width: 40%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Bill boards</p>
                                                <div class="">
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>                       
                        <div class="content3">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>App Versions</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <h4>App Usage across versions</h4>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.2</span>
                                            </div>
                                            <div class="w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_20">
                                                <span>123k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.3</span>
                                            </div>
                                            <div class=" w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" w_20">
                                                <span>53k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.4</span>
                                            </div>
                                            <div class=" w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" w_20">
                                                <span>23k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.5</span>
                                            </div>
                                            <div class=" w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_20">
                                                <span>3k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.6</span>
                                            </div>
                                            <div class="w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_20">
                                                <span>1k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Device Usage</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table class="" style="width:100%">
                                            <tr>
                                                <th style="width:45%;">
                                                    <p>Top 5</p>
                                                </th>
                                                <th>
                                                    <div class="row col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                        <p class="">Device</p>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                        <p class="">Progress</p>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <canvas class="canvasDoughnut" height="100%" width="100%" style="margin: 15px 10px 10px 0"></canvas>
                                                </td>
                                                <td>
                                                    <table class="tile_info">
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square blue"></i>IOS </p>
                                                            </td>
                                                            <td>30%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square green"></i>Android </p>
                                                            </td>
                                                            <td>10%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square purple"></i>Blackberry </p>
                                                            </td>
                                                            <td>20%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square aero"></i>Symbian </p>
                                                            </td>
                                                            <td>15%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square red"></i>Others </p>
                                                            </td>
                                                            <td>30%</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Quick Settings</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="">
                                            <ul class="quick-list">
                                                <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                                                </li>
                                                <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                                                </li>
                                                <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                                <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                                </li>
                                                <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                                <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                                </li>
                                                <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                                                </li>
                                            </ul>

                                            <div class="sidebar-widget">
                                                <h4>Profile Completion</h4>
                                                <canvas  id="chart_gauge_01" class="" ></canvas>
                                                <div class="">
                                                    <span id="gauge-text" class=" pull-left">0</span>
                                                    <span class="pull-left">%</span>
                                                    <span class=" pull-right">100%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>                       
                        <div class="content4">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Recent Activities <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="">
                                            <ul class="list-unstyled timeline widget">
                                                <li>
                                                    <div class="block">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You've Got Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers.
                                                            They were where you met the producers that could fund your project,
                                                            and if the buyers liked your flick, they'd pay to Fast-forward and... <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You've Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers.
                                                            They were where you met the producers that could fund your project, 
                                                            and if the buyers liked your flick, they'd pay to Fast-forward and... <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You've Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers.
                                                            They were where you met the producers that could fund your project, 
                                                            and if the buyers liked your flick, they'd pay to Fast-forward and... <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You've Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers.
                                                            They were where you met the producers that could fund your project,
                                                            and if the buyers liked your flick, they'd pay to Fast-forward and... <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="row content5">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>Visitors location <small>geo-presentation</small></h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="col-md-4">
                                                    <h2>125.7k Views from 60 countries</h2>

                                                    <table class="countries_list">
                                                        <tbody>
                                                            <tr>
                                                                <td>United States</td>
                                                                <td class=" text-right">33%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>France</td>
                                                                <td class="text-right">27%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Germany</td>
                                                                <td class="text-right">16%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Spain</td>
                                                                <td class="text-right">11%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Britain</td>
                                                                <td class="text-right">10%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>To Do List <small>Sample tasks</small></h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="">
                                                    <ul class="to_do">
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Create email address for new intern</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Create email address for new intern</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>Daily active users <small>Sessions</small></h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class=""><b>Monday</b>, 07:30 AM
                                                            <span>F</span>
                                                            <span><b>C</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="weather-text">
                                                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="weather-text">
                                                    <h3 class="degrees">23</h3>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Mon</h2>
                                                            <h3 class="degrees">25</h3>
                                                            <canvas id="clear-day" width="32" height="32"></canvas>
                                                            <h5>15 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Tue</h2>
                                                            <h3 class="degrees">25</h3>
                                                            <canvas height="32" width="32" id="rain"></canvas>
                                                            <h5>12 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Wed</h2>
                                                            <h3 class="degrees">27</h3>
                                                            <canvas height="32" width="32" id="snow"></canvas>
                                                            <h5>14 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Thu</h2>
                                                            <h3 class="degrees">28</h3>
                                                            <canvas height="32" width="32" id="sleet"></canvas>
                                                            <h5>15 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Fri</h2>
                                                            <h3 class="degrees">28</h3>
                                                            <canvas height="32" width="32" id="wind"></canvas>
                                                            <h5>11 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Sat</h2>
                                                            <h3 class="degrees">26</h3>
                                                            <canvas height="32" width="32" id="cloudy"></canvas>
                                                            <h5>10 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="footer">
                            <div class="pull-right">
                                Gentelella - Bootstrap Admin Template by <a href="#">Colorlib</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </body>
</html>




