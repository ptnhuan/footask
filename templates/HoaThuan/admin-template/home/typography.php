<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/typography.less', 'css/typography.css');
        ?>
        <link href="css/typography.css" rel="stylesheet" type="text/css"/>
        <script src="js/typography/jquery.min.js" type="text/javascript"></script>
        <script src="js/typography/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/typography/close-typography.js" type="text/javascript"></script>
        <script src="js/typography/side-bar.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25">
            <div class="container-fluid dashboard">
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
                                <ul class="nav navbar-nav navbar-right">
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#john">
                                            <a>
                                                <img src="images/img.jpg" alt="">John Doe
                                                <span class="fa fa-chevron-down"></span>
                                            </a>
                                            <h5>&nbsp;</h5>
                                        </div>
                                        <div id="john" class="collapse">
                                            <div class="c_john">
                                                <ul>
                                                    <li><a> Profile</a></li>
                                                    <li>
                                                        <a>
                                                            <span class="badge bg-red ">50%</span>
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li><a>Help</a></li>
                                                    <li><a><i class="fa fa-sign-out "></i> Log Out</a></li>
                                                </ul>                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#mail">
                                            <a>
                                                <i class="fa fa-envelope-o"></i>
                                                <span class="badge bg-green">6</span>
                                            </a>
                                            <h5>&nbsp;</h5>
                                        </div>
                                        <div id="mail" class="collapse">
                                            <div class="c_mail">
                                                <ul>
                                                    <li class="ago">
                                                        <a>
                                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                            <span>
                                                                <span>John Smith</span>
                                                                <span class="time">3 mins ago</span>
                                                            </span>
                                                            <span class="message">
                                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="ago">
                                                        <a>
                                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                            <span>
                                                                <span>John Smith</span>
                                                                <span class="time">3 mins ago</span>
                                                            </span>
                                                            <span class="message">
                                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="ago">
                                                        <a>
                                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                            <span>
                                                                <span>John Smith</span>
                                                                <span class="time">3 mins ago</span>
                                                            </span>
                                                            <span class="message">
                                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="ago">
                                                        <a>
                                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                            <span>
                                                                <span>John Smith</span>
                                                                <span class="time">3 mins ago</span>
                                                            </span>
                                                            <span class="message">
                                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="ago">
                                                        <div class="text-center">
                                                            <a>
                                                                <strong>See All Alerts</strong>
                                                                <i class="fa fa-angle-right"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>                
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- End Top_nav-->
                    <div class="clearfix"></div>
                    <div class="right-col">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Typography</h3>
                            </div>
                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 pull-right ">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="typography" id="typography">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Typography <small>different design elements</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#typography"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="typography">

                                        <div class="col-md-8 col-lg-8 col-sm-7">
                                            <blockquote>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>

                                            <blockquote class="blockquote-reverse">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                                    posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-sm-5">
                                            <h1>h1. Bootstrap heading</h1>
                                            <h2>h2. Bootstrap heading</h2>
                                            <h3>h3. Bootstrap heading</h3>
                                            <h4>h4. Bootstrap heading</h4>
                                            <h5>h5. Bootstrap heading</h5>
                                            <h6>h6. Bootstrap heading</h6>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-12">
                                            <h4>Labels and badges</h4>
                                            <span class="label label-default">Default</span>
                                            <span class="label label-primary">Primary</span>
                                            <span class="label label-success">Success</span>
                                            <span class="label label-info">Info</span>
                                            <span class="label label-warning">Warning</span>
                                            <span class="label label-danger">Danger</span>
                                            <span class="badge">42</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>    
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




