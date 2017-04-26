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
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/contacts.less', 'css/contacts.css');
        ?>
        <link rel="stylesheet" href="css/contacts.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/back-to-top.js" type="text/javascript"></script>
        <script src="js/sidebar-left.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="contact">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-md-2 left_col">
                        <div class="nav-sidemenu">
                            <div class="navbar nav_logo">
                                <a href="../dashboard2/index.php" class="site_title">
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
                                                <li><a href="../dashboard2/index.php">Dashboard2</a></li>
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
                                                <li><a href="contacts.php">Contacts</a></li>
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
                                <a href="../dashboard2/index.php"><i class="fa fa-paw"></i></a>
                            </div>
                            <nav class="menu-res">
                                <ul>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-home"></i><small>Home</small>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dashboard</a></li>
                                            <li><a href="../dashboard2/index.php">Dashboard2</a></li>
                                            <li><a href="../dashboard3/index2.php">Dashboard3</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-edit"></i><small>Form</small>
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
                                            <i class="fa fa-laptop"></i><br><small>UIE</small>
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
                                            <i class="fa fa-table"></i><small>Tables</small>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../tables/tables.php">Tables</a></li>
                                            <li><a href="../tables_dynamic/tables_dynamic.php">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bar-chart-o"></i><small>Data Present</small>
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
                                            <i class="fa fa-clone"></i><small>Layouts</small>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Fixed Sidebar</a></li>
                                            <li><a href="#">Fixed Footer</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bug"></i><br><small>Add Pages</small>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                            <li><a href="../projects/projects.php">Projects</a></li>
                                            <li><a href="../project_detail/project_detail.php">Project Detail</a></li>                                    
                                            <li><a href="contacts.php">Contacts</a></li>
                                            <li><a href="../profile/profile.php">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-windows"></i><small>Extras</small>
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
                                            <i class="fa fa-sitemap"></i><small>Mullevel Menu</small>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>    
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            <i class="fa fa-laptop"></i><small>Landing page</small>
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
                            <div class="content">
                                <div class="row">
                                    <div class="content-left col-md-6 col-sm-6 col-xs-6">
                                        <h3>Contact Design</h3>
                                    </div>
                                    <div class="content-right col-md-6 col-sm-6 col-xs-6">
                                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="admin-panel">
                                        <div class="admin-title">
                                            <ul class="word">
                                                <li><a href="#">A</a></li>
                                                <li><a href="#">B</a></li>
                                                <li><a href="#">C</a></li>
                                                <li><a href="#">D</a></li>
                                                <li><a href="#">E</a></li>
                                                <li>...</li>
                                                <li><a href="#">W</a></li>
                                                <li><a href="#">X</a></li>
                                                <li><a href="#">Y</a></li>
                                                <li><a href="#">Z</a></li>
                                            </ul>
                                        </div>
                                        <div class="admin-content">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="contact-info-user">
                                                        <div class="profile-view">
                                                            <div class="contact-info">
                                                                <h5><i>Digital Strategist</i></h5>
                                                                <div class="col-md-7 col-xs-7">
                                                                    <div class="contact-user">
                                                                        <h4>Nicole Pearson</h4>
                                                                        <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                        <i class="fa fa-building"></i>Address:<br>
                                                                        <i class="fa fa-phone"></i>Phone#:
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5">
                                                                    <img src="images/img.jpg" title="users">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-evaluate">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="ratings">
                                                                    <span>4.0</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <a href="#" class="btn-contact">
                                                                    <i class="fa fa-user"></i>
                                                                    <i class="fa fa-comment-o"></i>
                                                                </a>
                                                                <a href="#" class="btn-view">
                                                                    <i class="fa fa-user"></i>View Profile
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="contact-info-user">
                                                        <div class="profile-view">
                                                            <div class="contact-info">
                                                                <h5><i>Digital Strategist</i></h5>
                                                                <div class="col-md-7 col-xs-7">
                                                                    <div class="contact-user">
                                                                        <h4>Nicole Pearson</h4>
                                                                        <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                        <i class="fa fa-building"></i>Address:<br>
                                                                        <i class="fa fa-phone"></i>Phone#:
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5">
                                                                    <img src="images/img.jpg" title="users">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-evaluate">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="ratings">
                                                                    <span>4.0</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <a href="#" class="btn-contact">
                                                                    <i class="fa fa-user"></i>
                                                                    <i class="fa fa-comment-o"></i>
                                                                </a>
                                                                <a href="#" class="btn-view">
                                                                    <i class="fa fa-user"></i>View Profile
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="contact-info-user">
                                                        <div class="profile-view">
                                                            <div class="contact-info">
                                                                <h5><i>Digital Strategist</i></h5>
                                                                <div class="col-md-7 col-xs-7">
                                                                    <div class="contact-user">
                                                                        <h4>Nicole Pearson</h4>
                                                                        <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                        <i class="fa fa-building"></i>Address:<br>
                                                                        <i class="fa fa-phone"></i>Phone#:
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5">
                                                                    <img src="images/img.jpg" title="users">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-evaluate">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="ratings">
                                                                    <span>4.0</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <a href="#" class="btn-contact">
                                                                    <i class="fa fa-user"></i>
                                                                    <i class="fa fa-comment-o"></i>
                                                                </a>
                                                                <a href="#" class="btn-view">
                                                                    <i class="fa fa-user"></i>View Profile
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px;">
                                                    <div class="contact-info-user">
                                                        <div class="profile-view">
                                                            <div class="contact-info">
                                                                <h5><i>Digital Strategist</i></h5>
                                                                <div class="col-md-7 col-xs-7">
                                                                    <div class="contact-user">
                                                                        <h4>Nicole Pearson</h4>
                                                                        <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                        <i class="fa fa-building"></i>Address:<br>
                                                                        <i class="fa fa-phone"></i>Phone#:
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5">
                                                                    <img src="images/img.jpg" title="users">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-evaluate">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="ratings">
                                                                    <span>4.0</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <a href="#" class="btn-contact">
                                                                    <i class="fa fa-user"></i>
                                                                    <i class="fa fa-comment-o"></i>
                                                                </a>
                                                                <a href="#" class="btn-view">
                                                                    <i class="fa fa-user"></i>View Profile
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px;">
                                                    <div class="contact-info-user">
                                                        <div class="profile-view">
                                                            <div class="contact-info">
                                                                <h5><i>Digital Strategist</i></h5>
                                                                <div class="col-md-7 col-xs-7">
                                                                    <div class="contact-user">
                                                                        <h4>Nicole Pearson</h4>
                                                                        <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                        <i class="fa fa-building"></i>Address:<br>
                                                                        <i class="fa fa-phone"></i>Phone#:
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5">
                                                                    <img src="images/img.jpg" title="users">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-evaluate">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="ratings">
                                                                    <span>4.0</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <a href="#" class="btn-contact">
                                                                    <i class="fa fa-user"></i>
                                                                    <i class="fa fa-comment-o"></i>
                                                                </a>
                                                                <a href="#" class="btn-view">
                                                                    <i class="fa fa-user"></i>View Profile
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px;">
                                                    <div class="contact-info-user">
                                                        <div class="profile-view">
                                                            <div class="contact-info">
                                                                <h5><i>Digital Strategist</i></h5>
                                                                <div class="col-md-7 col-xs-7">
                                                                    <div class="contact-user">
                                                                        <h4>Nicole Pearson</h4>
                                                                        <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                        <i class="fa fa-building"></i>Address:<br>
                                                                        <i class="fa fa-phone"></i>Phone#:
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5">
                                                                    <img src="images/img.jpg" title="users">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-evaluate">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="ratings">
                                                                    <span>4.0</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <a href="#" class="btn-contact">
                                                                    <i class="fa fa-user"></i>
                                                                    <i class="fa fa-comment-o"></i>
                                                                </a>
                                                                <a href="#" class="btn-view">
                                                                    <i class="fa fa-user"></i>View Profile
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; margin-bottom: 22px;">
                                                    <div class="contact-info-user">
                                                        <div class="profile-view">
                                                            <div class="contact-info">
                                                                <h5><i>Digital Strategist</i></h5>
                                                                <div class="col-md-7 col-xs-7">
                                                                    <div class="contact-user">
                                                                        <h4>Nicole Pearson</h4>
                                                                        <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                        <i class="fa fa-building"></i>Address:<br>
                                                                        <i class="fa fa-phone"></i>Phone#:
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5">
                                                                    <img src="images/img.jpg" title="users">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-evaluate">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="ratings">
                                                                    <span>4.0</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <a href="#" class="btn-contact">
                                                                    <i class="fa fa-user"></i>
                                                                    <i class="fa fa-comment-o"></i>
                                                                </a>
                                                                <a href="#" class="btn-view">
                                                                    <i class="fa fa-user"></i>View Profile
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; margin-bottom: 22px;">
                                                    <div class="contact-info-user">
                                                        <div class="profile-view">
                                                            <div class="contact-info">
                                                                <h5><i>Digital Strategist</i></h5>
                                                                <div class="col-md-7 col-xs-7">
                                                                    <div class="contact-user">
                                                                        <h4>Nicole Pearson</h4>
                                                                        <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                        <i class="fa fa-building"></i>Address:<br>
                                                                        <i class="fa fa-phone"></i>Phone#:
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5">
                                                                    <img src="images/img.jpg" title="users">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-evaluate">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="ratings">
                                                                    <span>4.0</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <a href="#" class="btn-contact">
                                                                    <i class="fa fa-user"></i>
                                                                    <i class="fa fa-comment-o"></i>
                                                                </a>
                                                                <a href="#" class="btn-view">
                                                                    <i class="fa fa-user"></i>View Profile
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px; margin-bottom: 2px;">
                                                    <div class="contact-info-user">
                                                        <div class="profile-view">
                                                            <div class="contact-info">
                                                                <h5><i>Digital Strategist</i></h5>
                                                                <div class="col-md-7 col-xs-7">
                                                                    <div class="contact-user">
                                                                        <h4>Nicole Pearson</h4>
                                                                        <p><b>About:</b> Web Designer / UX / Graphic Artist / Coffee Lover</p>
                                                                        <i class="fa fa-building"></i>Address:<br>
                                                                        <i class="fa fa-phone"></i>Phone#:
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-xs-5">
                                                                    <img src="images/img.jpg" title="users">
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="profile-evaluate">
                                                            <div class="col-md-6 col-sm-12">
                                                                <p class="ratings">
                                                                    <span>4.0</span>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <a href="#" class="btn-contact">
                                                                    <i class="fa fa-user"></i>
                                                                    <i class="fa fa-comment-o"></i>
                                                                </a>
                                                                <a href="#" class="btn-view">
                                                                    <i class="fa fa-user"></i>View Profile
                                                                </a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
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