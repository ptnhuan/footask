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
        $less->compileFile('less/icon.less', 'css/icon.css');
        ?>
        <link href="css/icon.css" rel="stylesheet" type="text/css"/>
        <script src="js/icon/jquery.min.js" type="text/javascript"></script>
        <script src="js/icon/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/icon/side-bar.js" type="text/javascript"></script>
        <script src="js/icon/close-icon.js" type="text/javascript"></script>
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
                                <h3>Font Awesome Icons</h3>
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
                        <div class=" icon" id="icon">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Font Awesome Icons <small>different icon design elements</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#icon"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="icon">
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">Web Application Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-adjust"></i> fa-adjust</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-anchor"></i> fa-anchor</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-archive"></i> fa-archive</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-adjust"></i> fa-adjust</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-area-chart"></i> fa-area-chart</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-arrows"></i> fa-arrows</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-arrows-h"></i> fa-arrows-h</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-arrows-v"></i> fa-arrows-v</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-asterisk"></i> fa-asterisk</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-at"></i> fa-at</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-automobile"></i> fa-automobile</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-ban"></i> fa-ban</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">File Type Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file"></i> fa-file</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-archive-o"></i> fa-file-archive-o</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-audio-o"></i> fa-file-audio-o</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-code-o"></i> fa-file-code-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-excel-o"></i> fa-file-excel-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-image-o"></i> fa-file-image-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-movie-o"></i> fa-file-movie-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-o"></i> fa-file-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-pdf-o"></i> fa-file-pdf-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-photo-o"></i> fa-file-photo-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-picture-o"></i> fa-file-picture-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-file-powerpoint-o"></i> fa-file-powerpoint-o</a>
                                            </div>


                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="spinner">
                                            <h2 class="page-header">Spinner Icons</h2>
                                            <div class="alert alert-success">
                                                <ul class="fa-ul">
                                                    <li>
                                                        <i class="fa fa-info-circle fa-lg fa-li"></i> These icons work great with the <code>fa-spin</code> class. Check out the
                                                        <a href="#" class="alert-link">spinning icons example</a>.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="fontawesome-icon-list">
                                                <div class="row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#/adjust"><i class="fa fa-circle-o-notch"></i> fa-circle-o-notch</a>
                                                </div>
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-cog"></i> fa-cog</a>
                                                </div>
                                                <div class="row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-gear"></i> fa-gear</a>
                                                </div>
                                                <div class="row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-refresh"></i> fa-refresh</a>
                                                </div>
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-spinner"></i> fa-spinner</a>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">Form Control Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-check-square"></i> fa-check-square</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-check-square-o"></i> fa-check-square-o</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-circle"></i> fa-circle</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-circle-o"></i> fa-circle-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-minus-square"></i> fa-minus-square</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-plus-square"></i> fa-plus-square</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-square"></i> fa-square</a>
                                            </div> 
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-square-o"></i> fa-square-o</a>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">Payment Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-cc-amex"></i> fa-cc-amex</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-cc-discover"></i> fa-cc-discover</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-cc-mastercard"></i> fa-cc-mastercard</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-cc-paypal"></i> fa-cc-paypal</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-cc-stripe"></i> fa-cc-stripe</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-cc-visa"></i> fa-cc-visa</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-credit-card"></i> fa-credit-card</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-google-wallet"></i> fa-google-wallet</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-paypal"></i> fa-paypal</a>
                                            </div>                                                                                  
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">Chart Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-area-chart"></i> fa-area-chart</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-bar-chart"></i> fa-bar-chart</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-line-chart"></i> fa-line-chart</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-pie-chart"></i> fa-pie-chart</a>
                                            </div>                                                                                                                             
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">Currency Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-bitcoin"></i> fa-bitcoin</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-btc"></i> fa-btc</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-cny"></i> fa-cny</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-dollar"></i> fa-dollar</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-eur"></i> fa-eur</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-euro"></i> fa-euro</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-gbp"></i> fa-gbp</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-ils"></i> fa-ils</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-inr"></i> fa-inr</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-jpy"></i> fa-jpy</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-krw"></i> fa-krw</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-money"></i> fa-money</a>
                                            </div>


                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">Text Editor Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-align-center"></i> fa-align-center</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-align-justify"></i> fa-align-justify</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-align-left"></i> fa-align-left</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-align-right"></i> fa-align-right</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-bold"></i> fa-bold</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-chain"></i> fa-chain</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-chain-broken"></i> fa-chain-broken</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-clipboard"></i> fa-clipboard</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-columns"></i> fa-columns</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-copy"></i> fa-copy</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-cut"></i> fa-cut</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-dedent"></i> fa-dedent</a>
                                            </div>


                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">Directional Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-angle-double-down"></i> fa-angle-double-down </a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-angle-down"></i> fa-angle-down</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-angle-left"></i> fa-angle-left</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-angle-right"></i> fa-angle-right</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-angle-up"></i> fa-angle-up</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</a>
                                            </div>


                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">Video Player Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-backward"></i> fa-backward</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-compress"></i> fa-compress</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-eject"></i> fa-eject</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-expand"></i> fa-expand</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-fast-backward"></i> fa-fast-backward</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-fast-forward"></i> fa-fast-forward</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-forward"></i> fa-forward</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-pause"></i> fa-pause</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-play"></i> fa-play</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-play-circle"></i> fa-play-circle</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</a>
                                            </div>


                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="spinner">
                                            <h2 class="page-header">Brand Icons</h2>
                                            <div class="alert alert-success">
                                                <ul>
                                                    <li>All brand icons are trademarks of their respective owners.</li>
                                                    <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
                                                </ul>

                                            </div>
                                            <div class="alert alert-warning">
                                                <h4><i class="fa fa-warning"></i> Warning!</h4> 
                                                Apparently, Adblock Plus can remove Font Awesome brand icons with their "Remove Social Media Buttons" setting.
                                                We will not use hacks to force them to display. Please
                                                <a href="#" class="alert-link">report an issue with Adblock Plus</a> 
                                                if you believe this to be an error. To work around this, you'll need to modify the social icon class names.

                                            </div>
                                            <div class="fontawesome-icon-list">
                                                <div class="row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-adjust"></i> fa-adjust</a>
                                                </div>
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-adn"></i> fa-adn</a>
                                                </div>
                                                <div class="row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-android"></i> fa-android</a>
                                                </div>
                                                <div class="row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-angellist"></i> fa-angellist</a>
                                                </div>
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-apple"></i> fa-apple</a>
                                                </div>  
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-behance"></i> fa-behance</a>
                                                </div> 
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-behance-square"></i> fa-behance-square</a>
                                                </div> 
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-bitbucket"></i> fa-bitbucket</a>
                                                </div> 
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</a>
                                                </div> 
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-bitcoin"></i> fa-bitcoin</a>
                                                </div> 
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-btc"></i> fa-btc</a>
                                                </div> 
                                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                    <a href="#"><i class="fa fa-cc-amex"></i> fa-cc-amex</a>
                                                </div>                                             
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="fontawesome-icon-list">
                                            <h2 class="page-header">Medical Icons</h2>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-ambulance"></i> fa-ambulance</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-h-square"></i> fa-h-square</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-hospital-o"></i> fa-hoapital-o</a>
                                            </div>
                                            <div class="row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-medkit"></i> fa-medkit</a>
                                            </div>
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-plus-square"></i> fa-plus-square</a>
                                            </div>     
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-stethoscope"></i> fa-stethoscope</a>
                                            </div> 
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-user-md"></i> fa-user-md</a>
                                            </div> 
                                            <div class=" row col-md-3 col-sm-6 col-xs-12">
                                                <a href="#"><i class="fa fa-wheelchair"></i> fa-wheelchair</a>
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




