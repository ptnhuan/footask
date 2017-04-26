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
        $less->compileFile('less/form_button.less', 'css/form_button.css');
        ?>
        <link href="css/form_button.css" rel="stylesheet" type="text/css"/>
        <script src="js/form_button/jquery.min.js" type="text/javascript"></script>
        <script src="js/form_button/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/form_button/side-bar.js" type="text/javascript"></script>
        <script src="js/form_button/close-button.js" type="text/javascript"></script>
        <script src="js/form_button/close-button1.js" type="text/javascript"></script>
        <script src="js/form_button/close-button2.js" type="text/javascript"></script>
        <script src="js/form_button/close-button3.js" type="text/javascript"></script>
        <script src="js/form_button/close-button4.js" type="text/javascript"></script>
        <script src="js/form_button/close-button5.js" type="text/javascript"></script>
        <script src="js/form_button/close-button6.js" type="text/javascript"></script>
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
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Form Buttons</h3>
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
                        <div class="left col-md-6">
                            <div class="row content">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Default Buttons </h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#button1"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="button1">
                                        <button type="button" class="btn btn-default">Default</button>

                                        <button type="button" class="btn btn-primary">Primary</button>

                                        <button type="button" class="btn btn-success">Success</button>

                                        <button type="button" class="btn btn-info">Info</button>

                                        <button type="button" class="btn btn-warning">Warning</button>

                                        <button type="button" class="btn btn-danger">Danger</button>

                                        <button type="button" class="btn btn-dark">Dark</button>

                                        <button type="button" class="btn btn-link">Link</button>
                                    </div>
                                </div>
                            </div> 
                            <div class="row content1">
                                <div class="x_panel1">
                                    <div class="x_title">
                                        <h2>Rounded Button</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#button1"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link1"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="button1">
                                        <button type="button" class="btn btn-round btn-default">Default</button>
                                        <button type="button" class="btn btn-round btn-primary">Primary</button>
                                        <button type="button" class="btn btn-round btn-success">Success</button>
                                        <button type="button" class="btn btn-round btn-info">Info</button>
                                        <button type="button" class="btn btn-round btn-warning">Warning</button>
                                        <button type="button" class="btn btn-round btn-danger">Danger</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row content2">
                                <div class="x_panel2">
                                    <div class="x_title">
                                        <h2>Button Dropdown</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#button2"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link2"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="button2">
                                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" aria-expanded="false">Default <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>

                                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm" type="button" aria-expanded="true">Primary <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>

                                        <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button" aria-expanded="true">Success <span class="caret"></span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a>
                                            </li>
                                            <li><a href="#">Another action</a>
                                            </li>
                                            <li><a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row content3">
                                <div class="x_panel3">
                                    <div class="x_title">
                                        <h2>Split Button Dropdown</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#button3"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link3"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="button3">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a>
                                                </li>
                                                <li><a href="#">Another action</a>
                                                </li>
                                                <li><a href="#">Something else here</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a>
                                                </li>
                                                <li><a href="#">Another action</a>
                                                </li>
                                                <li><a href="#">Something else here</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger">Action</button>
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a>
                                                </li>
                                                <li><a href="#">Another action</a>
                                                </li>
                                                <li><a href="#">Something else here</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="row content4">
                                <div class="x_panel4">
                                    <div class="x_title">
                                        <h2>Button App Design</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#button4"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link4"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="button4">
                                        <p>Add the class <code>.btn .btn-app</code> tag</p>
                                        <a class="btn btn-app">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a class="btn btn-app">
                                            <i class="fa fa-play"></i> Play
                                        </a>
                                        <a class="btn btn-app">
                                            <i class="fa fa-pause"></i> Pause
                                        </a>
                                        <a class="btn btn-app">
                                            <i class="fa fa-save"></i> Save
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-red">6</span>
                                            <i class="fa fa-bullhorn"></i> Notifications
                                        </a>
                                        <a class="btn btn-app">
                                            <i class="fa fa-repeat"></i> Repeat
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-green">211</span>
                                            <i class="fa fa-users"></i> Users
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-orange">32</span>
                                            <i class="fa fa-inbox"></i> Orders
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-orange">12</span>
                                            <i class="fa fa-envelope"></i> Inbox
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-blue">102</span>
                                            <i class="fa fa-heart-o"></i> Likes
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right col-md-6">
                            <div class="row content5">
                                <div class="x_panel5">
                                    <div class="x_title">
                                        <h2>Button Sizes</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#button5"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link5"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="button5">
                                        <div class="buttons">                                            
                                            <button type="button" class="btn btn-default btn-lg">Large Button</button>
                                            <button type="button" class="btn btn-default btn-sm">Medium Button</button>
                                            <button type="button" class="btn btn-default btn-xs">Small Button</button>
                                            <br>

                                            <button type="button" class="btn btn-success btn-lg">Large Button</button>
                                            <button type="button" class="btn btn-success btn-sm">Medium Button</button>
                                            <button type="button" class="btn btn-success btn-xs">Small Button</button>
                                            <br>

                                            <button type="button" class="btn btn-info btn-lg">Large Button</button>
                                            <button type="button" class="btn btn-info btn-sm">Medium Button</button>
                                            <button type="button" class="btn btn-info btn-xs">Small Button</button>
                                            <br>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row content6">
                                <div class="x_panel6">
                                    <div class="x_title">
                                        <h2>Button Groups</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#button6"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link6"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="button6">
                                        <div class="group">
                                            <div class="btn-group">
                                                <button class="btn btn-default" type="button">Left</button>
                                                <button class="btn btn-default" type="button">Middle</button>
                                                <button class="btn btn-default" type="button">Right</button>
                                            </div>
                                            <div class="btn-group  btn-group-sm">
                                                <button class="btn btn-default" type="button">Left</button>
                                                <button class="btn btn-default" type="button">Middle</button>
                                                <button class="btn btn-default" type="button">Right</button>
                                            </div>
                                        </div>
                                        <p class="text-muted">Vertical button groups</p>
                                        <div class="group">
                                            <div class="btn-group-vertical">
                                                <button class="btn btn-default" type="button">Top</button>
                                                <button class="btn btn-default" type="button">Middle</button>
                                                <button class="btn btn-default" type="button">Bottom</button>
                                            </div>
                                        </div>
                                        <p class="text-muted">Nested button groups</p>
                                        <div class="group">
                                            <div class="btn-group">
                                                <button class="btn btn-default" type="button">1</button>
                                                <button class="btn btn-danger" type="button">2</button>
                                                <button class="btn btn-default" type="button">3</button>
                                                <div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Dropdown 
                                                        <span class="caret"></span> 
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown link 1</a>
                                                        </li>
                                                        <li><a href="#">Dropdown link 2</a>
                                                        </li>
                                                        <li><a href="#">Dropdown link 3</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-muted">Multiple button groups</p>
                                        <div class="group">
                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-info" type="button">1</button>
                                                    <button class="btn btn-info active" type="button">2</button>
                                                    <button class="btn btn-info" type="button">3</button>
                                                    <button class="btn btn-info" type="button">4</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success" type="button">5</button>
                                                    <button class="btn btn-success" type="button">6</button>
                                                    <button class="btn btn-success" type="button">7</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-warning" type="button">8</button>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-muted">Group Radio</p>
                                        <div class="group">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default">
                                                    <input type="radio" name="options"> Option 1
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="options"> Option 2
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="options"> Option 3
                                                </label>
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




