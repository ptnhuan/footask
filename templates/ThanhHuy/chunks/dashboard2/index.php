<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/dashboard2.less', 'css/dashboard2.css');
        ?>
        <link rel="stylesheet" href="css/dashboard2.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/chart.js" type="text/javascript"></script>
        <script src="js/canvasjs.min.js" type="text/javascript"></script>
        <script src="js/back-to-top.js" type="text/javascript"></script>
        <script src="js/sidebar-left.js" type="text/javascript"></script>
        <script src="js/collapse-close.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/datetimepicker.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="dashboard2">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-md-2 left_col">
                        <div class="nav-sidemenu">
                            <div class="navbar nav_logo">
                                <a href="index.php" class="site_title">
                                    <i class="fa fa-paw"></i>
                                    <span>Gentelella Alela!</span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="nav_profile clearfix">
                                <div class="profile_pic">
                                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                                </div>
                                <div class="profile_info">
                                    <span>Welcome,</span>
                                    <h2>John Doe</h2>
                                </div>
                            </div>
                            <div class="nav_mainmenu">
                                <div class="menu-list">
                                    <h3>General</h3>
                                    <ul class="nav side-menu panel-group" id="collapsed">
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-home">
                                                <i class="fa fa-home"></i> Home 
                                                <i class="down fa fa-chevron-down"></i></a>
                                            <ul class="nav child_menu collapse" id="nav-home">
                                                <li><a href="#">Dashboard</a></li>
                                                <li><a href="index.php">Dashboard2</a></li>
                                                <li><a href="../dashboard3/index2.php">Dashboard3</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-forms">
                                                <i class="fa fa-edit"></i>
                                                Forms
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-forms">
                                                <li><a href="#">General Form</a></li>
                                                <li><a href="#">Advanced Components</a></li>
                                                <li><a href="#">Form Validation</a></li>
                                                <li><a href="#">Form Wizard</a></li>
                                                <li><a href="#">Form Upload</a></li>
                                                <li><a href="#">Form Buttons</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-ui">
                                                <i class="fa fa-desktop"></i> UI Elements 
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-ui">
                                                <li><a href="#">General Elements</a></li>
                                                <li><a href="#">Media Gallery</a></li>
                                                <li><a href="#">Typography</a></li>
                                                <li><a href="#">Icons</a></li>
                                                <li><a href="../glyphicons/glyphicons.php">Glyphicons</a></li>
                                                <li><a href="#">Widgets</a></li>
                                                <li><a href="../invoice/invoice.php">Invoice</a></li>
                                                <li><a href="#">Inbox</a></li>
                                                <li><a href="#">Calendar</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-tables">
                                                <i class="fa fa-table"></i> Tables
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-tables">
                                                <li><a href="../tables/tables.php">Tables</a></li>
                                                <li><a href="../tables_dynamic/tables_dynamic.php">Table Dynamic</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-data">
                                                <i class="fa fa-bar-chart-o"></i> Data Presentation
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-data">
                                                <li><a href="#">Chart JS</a></li>
                                                <li><a href="#">Chart JS2</a></li>
                                                <li><a href="#">Moris JS</a></li>
                                                <li><a href="#">ECharts</a></li>
                                                <li><a href="#">Other Charts</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-layouts">
                                                <i class="fa fa-clone"></i>Layouts 
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-layouts">
                                                <li><a href="#">Fixed Sidebar</a></li>
                                                <li><a href="#">Fixed Footer</a></li>
                                            </ul>
                                        </li>
                                        <h3 class="live-on">Live On</h3>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-pages">
                                                <i class="fa fa-bug"></i> Additional Pages 
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-pages">
                                                <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                                <li><a href="../projects/projects.php">Projects</a></li>
                                                <li><a href="../project_detail/project_detail.php">Project Detail</a></li>
                                                <li><a href="../contacts/contacts.php">Contacts</a></li>
                                                <li><a href="../profile/profile.php">Profile</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-ex">
                                                <i class="fa fa-windows"></i> Extras
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-ex">
                                                <li><a href="#">403 Error</a></li>
                                                <li><a href="#">404 Error</a></li>
                                                <li><a href="#">500 Error</a></li>
                                                <li><a href="#">Plain Page</a></li>
                                                <li><a href="../login/login.php">Login Page</a></li>
                                                <li><a href="../pricing_tables/pricing_tables.php">Pricing Tables</a></li>
                                            </ul>
                                        </li>
                                        <li class="panel panel-default">
                                            <a data-toggle="collapse" data-parent="#collapsed" href="#nav-multilevel">
                                                <i class="fa fa-sitemap"></i> Multilevel Menu
                                                <i class="down fa fa-chevron-down"></i>
                                            </a>
                                            <ul class="nav child_menu collapse" id="nav-multilevel">
                                                <li>
                                                    <a href="#level1_1">Level One</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="collapse" href="#nav-levelOne">
                                                        Level One<span class="fa fa-chevron-down"></span>
                                                    </a>
                                                    <ul class="nav child_menu collapse" id="nav-levelOne">
                                                        <li><a href="#">Level Two</a></li>
                                                        <li><a href="#">Level Two</a></li>
                                                        <li><a href="#">Level Two</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Level One</a></li>
                                            </ul>
                                        </li>                  
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-laptop"></i> Landing Page 
                                                <span class="label label-success pull-right">Coming Soon</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div><!-- End Sidebar Menu -->
                            <div class="nav_footer hidden-small">
                                <a href="#">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                                </a>
                                <a href="#">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                        <div class="nav_response">
                            <div class="logo-res">
                                <a href="index.php"><i class="fa fa-paw"></i></a>
                            </div>
                            <nav class="menu-res">
                                <ul>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-home"></i><h5>Home</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dashboard</a></li>
                                            <li><a href="index.php">Dashboard2</a></li>
                                            <li><a href="../dashboard3/index2.php">Dashboard3</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-edit"></i><h5>Form</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">General Form</a></li>
                                            <li><a href="#">Advanced Components</a></li>
                                            <li><a href="#">Form Validation</a></li>
                                            <li><a href="#">Form Wizard</a></li>
                                            <li><a href="#">Form Upload</a></li>
                                            <li><a href="#">Form Buttons</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-laptop"></i><br><h5>UI Elements</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">General Elements</a></li>
                                            <li><a href="#">Media Gallery</a></li>
                                            <li><a href="#">Typography</a></li>
                                            <li><a href="#">Icons</a></li>
                                            <li><a href="../glyphicons/glyphicons.php">Glyphicons</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="../invoice/invoice.php">Invoice</a></li>
                                            <li><a href="#">Inbox</a></li>
                                            <li><a href="#">Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-table"></i><h5>Tables</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../tables/tables.php">Tables</a></li>
                                            <li><a href="../tables_dynamic/tables_dynamic.php">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bar-chart-o"></i><h5>Data Present</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Chart JS</a></li>
                                            <li><a href="#">Chart JS2</a></li>
                                            <li><a href="#">Moris JS</a></li>
                                            <li><a href="#">Echarts</a></li>
                                            <li><a href="#">Other Charts</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-clone"></i><h5>Layouts</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Fixed Sidebar</a></li>
                                            <li><a href="#">Fixed Footer</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bug"></i><br><h5>Add Pages</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                            <li><a href="../projects/projects.php">Projects</a></li>
                                            <li><a href="../project_detail/project_detail.php">Project Detail</a></li>                                    
                                            <li><a href="../contacts/contacts.php">Contacts</a></li>
                                            <li><a href="../profile/profile.php">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-windows"></i><h5>Extras</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">403 Error</a></li>
                                            <li><a href="#">404 Error</a></li>
                                            <li><a href="#">500 Error</a></li>                                    
                                            <li><a href="#">Plain Page</a></li>
                                            <li><a href="../login/login.php">Login Page</a></li>
                                            <li><a href="../pricing_tables/pricing_tables.php">Pricing Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-sitemap"></i><h5>Mullevel Menu</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>    
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            <i class="fa fa-laptop"></i><h5>Landing page</h5>
                                        </a>
                                        <span class="label label-success pull-right">Comming Soon</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-10 right_col">
                        <div class="top-nav">
                            <div class="nav_menu">
                                <nav>
                                    <a href="#menu-toggle" id="menu-toggle" class="btn btn-default toggled"><i class="fa fa-bars"></i></a>
                                    <ul class="nav navbar-right">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <img src="images/img.jpg" alt="">John Doe
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
                                                            <img src="images/img.jpg" alt="Profile image">
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
                                                            <img src="images/img.jpg" alt="Profile image">
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
                                                            <img src="images/img.jpg" alt="Profile image">
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
                        <div class="main-content">
                            <div class="row">                       
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="new-sign-up">
                                        <div class="icon">
                                            <i class="fa fa-caret-square-o-right"></i>
                                        </div>
                                        <div class="count">179
                                        </div>
                                        <h3>New Sign ups</h3>
                                        <p>Lorem ipsum psdea itgum rixt.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="new-sign-up">
                                        <div class="icon">
                                            <i class="fa fa-comments-o"></i>
                                        </div>
                                        <div class="count">179
                                        </div>
                                        <h3>New Sign ups</h3>
                                        <p>Lorem ipsum psdea itgum rixt.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="new-sign-up">
                                        <div class="icon">
                                            <i class="fa fa-sort-amount-desc"></i>
                                        </div>
                                        <div class="count">179
                                        </div>
                                        <h3>New Sign ups</h3>
                                        <p>Lorem ipsum psdea itgum rixt.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="new-sign-up" style="margin-right: 15px;">
                                        <div class="icon">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <div class="count">179
                                        </div>
                                        <h3>New Sign ups</h3>
                                        <p>Lorem ipsum psdea itgum rixt.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel admin1">
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
                                                    <div class="col-md-4">
                                                        <span>Total Sessions</span>
                                                        <h2>231,809</h2>
                                                        <div id="chartCoalContainer2"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <span>Total Revenue</span>
                                                        <h2>231,809</h2>
                                                        <div id="chartCoalContainer3"></div>
                                                    </div>
                                                    <div class="col-md-4">
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
                                    <div class="admin-panel admin2">
                                        <div class="admin-title">
                                            <h2>
                                                Weekly Summary
                                                <small>Activity shares</small>
                                            </h2>
                                            <ul class="sales">
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
                                            <div class="row">
                                                <div class="col-md-7 col-sm-12 col-xs-12">
                                                    <!-- Weekly chart -->
                                                    <div id="chartReportContainer"></div>
                                                    <!-- -->
                                                    <h4>Weekly sales progress</h4>
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                                            <div id="chartPieContainer1"></div>
                                                            <h4 class="rates">Bounce Rates</h4>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                                            <div id="chartPieContainer2"></div>
                                                            <h4 class="rates">New Traffic</h4>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                                            <div id="chartPieContainer3"></div>
                                                            <h4 class="rates">Device Share</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="admin-panel admin3">
                                        <div class="admin-title">
                                            <h2>
                                                Top Profiles
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="admin-panel admin3">
                                        <div class="admin-title">
                                            <h2>
                                                Top Profiles
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
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="admin-panel admin3">
                                        <div class="admin-title">
                                            <h2>
                                                Top Profiles
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
                    <div class="clearfix"></div>

                    <footer>
                        Gentelella - Bootstrap Admin Template by
                        <a href="#"> Colorlib</a>
                    </footer>
                </div>
                <div id="back-to-top"><i class="fa fa-chevron-up"></i></div>
            </div>
        </div>
    </body>
</html>