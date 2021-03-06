<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page Projects</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/projects/type-f-12.less', 'css/projects/type-f-12.css');
        ?>
        <link rel="stylesheet" href="css/projects/type-f-12.css">
        <script src="js/projects/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/projects/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/projects/back-to-top.js" type="text/javascript"></script>
        <script src="js/projects/flexible-menu.js" type="text/javascript"></script>
        <script src="js/projects/collapse-close.js" type="text/javascript"></script>
    </head>

    <body style="background-color: #2A3F54;">
        <div class="type-f-12">
            <div class="container-fluid">
                <div class="nav-side-menu col-md-2">
                    <div class="logo">
                        <a href="index_dashboard2.php">
                            <i class="fa fa-paw"></i>
                            <span>Gentelella Alela!</span>
                        </a>
                    </div>
                    <div class="img-user clearfix">
                        <img src="images/img.jpg" alt="men">
                        <div class="welcome-name">
                            <span>Welcome,</span>
                            <p>John Due</p>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <h3>General</h3>

                        <div class="menu-list">
                            <ul id="menu-content" class="menu-content collapse out">
                                <li data-toggle="collapse" data-target="#home" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-home"></i> Home <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="home">
                                    <li><a href="#">&#8226; Dashboard</a></li>
                                    <li><a href="index_dashboard2.php">&#8226; Dashboard2</a></li>
                                    <li><a href="index_dashboard3.php">&#8226; Dashboard3</a></li>
                                </ul>

                                <li data-toggle="collapse" data-target="#form" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-edit"></i> Forms <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="form">
                                    <li><a href="#">&#8226; General Form</a></li>
                                    <li><a href="#">&#8226; Advanced Components</a></li>
                                    <li><a href="#">&#8226; Form Validation</a></li>
                                    <li><a href="#">&#8226; Form Wizard</a></li>
                                    <li><a href="#">&#8226; Form Upload</a></li>
                                    <li><a href="#">&#8226; Form Buttons</a></li>
                                </ul>

                                <li data-toggle="collapse" data-target="#uie" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-desktop"></i>  UI Elements  <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="uie">
                                    <li><a href="#">&#8226; General Elements</a></li>
                                    <li><a href="#">&#8226; Media Gallery</a></li>
                                    <li><a href="#">&#8226; Typography</a></li>
                                    <li><a href="#">&#8226; Icons</a></li>
                                    <li><a href="index_glyphicons.php">&#8226; Glyphicons</a></li>
                                    <li><a href="#">&#8226; Widgets</a></li>
                                    <li><a href="index_invoice.php">&#8226; Invoice</a></li>
                                    <li><a href="#">&#8226; Inbox</a></li>
                                    <li><a href="#">&#8226; Calendar</a></li>
                                </ul>

                                <li data-toggle="collapse" data-target="#tables" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-table"></i> Tables <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="tables">
                                    <li><a href="index_table1.php">&#8226; Tables</a></li>
                                    <li><a href="index_table2.php">&#8226; Table Dynamic</a></li>
                                </ul>

                                <li data-toggle="collapse" data-target="#chart" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-bar-chart-o"></i> Data Presentation  <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="chart">
                                    <li><a href="#">&#8226; Chart JS</a></li>
                                    <li><a href="#">&#8226; Chart JS2</a></li>
                                    <li><a href="#">&#8226; Moris JS</a></li>
                                    <li><a href="#">&#8226; Echarts</a></li>
                                    <li><a href="#">&#8226; Other Charts</a></li>
                                </ul>

                                <li data-toggle="collapse" data-target="#layout" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-clone"></i>  Layouts  <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="layout">
                                    <li><a href="#">&#8226; Fixed Sidebar</a></li>
                                    <li><a href="#">&#8226; Fixed Footer</a></li>
                                </ul>
                                <h3>Live on</h3>

                                <li data-toggle="collapse" data-target="#pages" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-pagelines"></i>  Additional Pages  <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="pages">
                                    <li><a href="index_e-commerce.php">&#8226; E-commerce</a></li>
                                    <li class="active"><a href="index_projects.php">&#8226; Projects</a></li>
                                    <li><a href="index_projects-detail.php">&#8226; Project Detail</a></li>                                    
                                    <li><a href="index_contacts.php">&#8226; Contacts</a></li>
                                    <li><a href="index_profile.php">&#8226; Profile</a></li>
                                </ul>

                                <li data-toggle="collapse" data-target="#extras" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-windows"></i>  Extras  <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="extras">
                                    <li><a href="#">&#8226; 403 Error</a></li>
                                    <li><a href="#">&#8226; 404 Error</a></li>
                                    <li><a href="#">&#8226; 500 Error</a></li>                                    
                                    <li><a href="#">&#8226; Plain Page</a></li>
                                    <li><a href="index_login.php">&#8226; Login Page</a></li>
                                    <li><a href="index_pricing-tables.php">&#8226; Pricing Tables</a></li>
                                </ul>

                                <li data-toggle="collapse" data-target="#menu" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-sitemap"></i>   Multilevel Menu   <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="menu">
                                    <li><a href="#">&#8226; Level One</a></li>
                                    <li><a href="#">&#8226; Level One</a></li>
                                    <li><a href="#">&#8226; Level One</a></li>    
                                </ul>

                                <li class="active">
                                    <a href="#">
                                        <i class="fa fa-laptop"></i>  Landing Page 
                                        <span class="label label-success pull-right" style="margin-top: 11px;">Coming Soon</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-footer">
                            <a href="#" title="Settings">
                                <i class="glyphicon glyphicon-cog"></i>
                            </a>
                            <a href="#" title="Full screen">
                                <i class="glyphicon glyphicon-fullscreen"></i>
                            </a>

                            <a href="#" title="Lock">
                                <i class="glyphicon glyphicon-eye-close"></i>
                            </a>
                            <a href="#" title="Logout">
                                <i class="glyphicon glyphicon-off"></i>
                            </a>
                        </div>
                    </div>
                    <div class="nav-collapse">
                        <div class="logo-collapse">
                            <a href="index_dashboard2.php"><i class="fa fa-paw"></i></a>
                        </div>
                        <nav class="menu-collapse">
                            <ul>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-home"></i><small>Home</small>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">&#8226; Dashboard</a></li>
                                        <li><a href="index_dashboard2.php">&#8226; Dashboard2</a></li>
                                        <li><a href="index_dashboard3.php">&#8226; Dashboard3</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-edit"></i><small>Form</small>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">&#8226; General Form</a></li>
                                        <li><a href="#">&#8226; Advanced Components</a></li>
                                        <li><a href="#">&#8226; Form Validation</a></li>
                                        <li><a href="#">&#8226; Form Wizard</a></li>
                                        <li><a href="#">&#8226; Form Upload</a></li>
                                        <li><a href="#">&#8226; Form Buttons</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-laptop"></i><small>UIE</small>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">&#8226; General Elements</a></li>
                                        <li><a href="#">&#8226; Media Gallery</a></li>
                                        <li><a href="#">&#8226; Typography</a></li>
                                        <li><a href="#">&#8226; Icons</a></li>
                                        <li><a href="index_glyphicons.php">&#8226; Glyphicons</a></li>
                                        <li><a href="#">&#8226; Widgets</a></li>
                                        <li><a href="index_invoice.php">&#8226; Invoice</a></li>
                                        <li><a href="#">&#8226; Inbox</a></li>
                                        <li><a href="#">&#8226; Calendar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-table"></i><small>Tables</small>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index_table1.php">&#8226; Tables</a></li>
                                        <li><a href="index_table2.php">&#8226; Table Dynamic</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bar-chart-o"></i><small>Data Present</small>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">&#8226; Chart JS</a></li>
                                        <li><a href="#">&#8226; Chart JS2</a></li>
                                        <li><a href="#">&#8226; Moris JS</a></li>
                                        <li><a href="#">&#8226; Echarts</a></li>
                                        <li><a href="#">&#8226; Other Charts</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-clone"></i><small>Layouts</small>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">&#8226; Fixed Sidebar</a></li>
                                        <li><a href="#">&#8226; Fixed Footer</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bug"></i><small>Add Pages</small>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index_e-commerce.php">&#8226; E-commerce</a></li>
                                        <li class="active"><a href="index_projects.php">&#8226; Projects</a></li>
                                        <li><a href="index_projects-detail.php">&#8226; Project Detail</a></li>                                    
                                        <li><a href="index_contacts.php">&#8226; Contacts</a></li>
                                        <li><a href="index_profile.php">&#8226; Profile</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-windows"></i><small>Extras</small>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">&#8226; 403 Error</a></li>
                                        <li><a href="#">&#8226; 404 Error</a></li>
                                        <li><a href="#">&#8226; 500 Error</a></li>                                    
                                        <li><a href="#">&#8226; Plain Page</a></li>
                                        <li><a href="index_login.php">&#8226; Login Page</a></li>
                                        <li><a href="index_pricing-tables.php">&#8226; Pricing Tables</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-sitemap"></i><small>Mullevel Menu</small>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">&#8226; Level One</a></li>
                                        <li><a href="#">&#8226; Level One</a></li>
                                        <li><a href="#">&#8226; Level One</a></li>    
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
                <div class="col-md-10 page-content-wrraper">
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
                    <div class="content">
                        <div class="content-left">
                            <h3>Projects <small>Listing design</small></h3>
                        </div>
                        <div class="content-right">
                            <div class="input-search">
                                <form method="get" action="#">
                                    <input type="text" class="form-search" placeholder="Search for...">

                                </form>
                                <span class="input-btn-search">
                                    <button class="btn-search" type="button">Go!</button>
                                </span>
                            </div>
                        </div>  

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="admin-panel">
                                <div class="admin-title">
                                    <h3>
                                        Projects
                                    </h3>
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
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p>Simple table with project listing with progress and editing options</p>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Project Name</th>
                                                        <th>Team Members</th>
                                                        <th>Project Progress</th>
                                                        <th>Status</th>
                                                        <th>#Edit</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 57%;"></div>
                                                            </div>
                                                            <small>57% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 47%;"></div>
                                                            </div>
                                                            <small>47% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 77%;"></div>
                                                            </div>
                                                            <small>77% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 60%;"></div>
                                                            </div>
                                                            <small>60% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 12%;"></div>
                                                            </div>
                                                            <small>12% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 95%;"></div>
                                                            </div>
                                                            <small>95% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 50%;"></div>
                                                            </div>
                                                            <small>50% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 35%;"></div>
                                                            </div>
                                                            <small>35% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 75%;"></div>
                                                            </div>
                                                            <small>75% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#</td>
                                                        <td>
                                                            <a href="#" class="title-name">Pesamakini Backend UI</a>
                                                            <br>
                                                            <small>Created 01.01.2015</small>
                                                        </td>
                                                        <td>
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                            <img src="images/user.png" alt="users" class="avartar">
                                                        </td>
                                                        <td class="project-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: 25%;"></div>
                                                            </div>
                                                            <small>25% Complete</small>
                                                        </td>
                                                        <td>
                                                            <a href="#" class="status">
                                                                Success
                                                            </a> 
                                                        </td>
                                                        <td class="btn-function">
                                                            <a href="#" class="view">
                                                                <i class="fa fa-folder"></i>View
                                                            </a> 
                                                            <a href="#" class="edit">
                                                                <i class="fa fa-pencil"></i> Edit
                                                            </a> 
                                                            <a href="#" class="delete">
                                                                <i class="fa fa-trash"></i>Delete
                                                            </a> 
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        Gentelella - Bootstrap Admin Template by
                        <a href="#"> Colorlib</a>
                    </footer>
                    <div id="back-to-top"><i class="fa fa-chevron-up"></i></div>
                </div>
            </div>
            
        </div>
    </body>
</html>
