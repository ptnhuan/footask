<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Sidebar left profile</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/pricing-tables/49.less', '../../css/pricing-tables/49.css');
        ?>
        <link rel="stylesheet" href="../../css/pricing-tables/49.css">
        <script src="../../js/pricing-tables/49/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/pricing-tables/49/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-49">
            <div class="container-fluid">
                <div class="nav-side-menu col-md-2">
                    <div class="logo">
                        <a href="#">
                            <i class="fa fa-paw"></i>
                            <span>Gentelella Alela!</span>
                        </a>
                    </div>
                    <div class="img-user clearfix">
                        <img src="../../images/img.jpg" alt="men">
                        <div class="welcome-name">
                            <span>Welcome,</span>
                            <p>John Due</p>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <h3>General</h3>
                        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                        <div class="menu-list">
                            <ul id="menu-content" class="menu-content collapse out">
                                <li data-toggle="collapse" data-target="#home" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-home"></i> Home <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="home">
                                    <li><a href="#">&#8226; Dashboard</a></li>
                                    <li><a href="#">&#8226; Dashboard2</a></li>
                                    <li><a href="#">&#8226; Dashboard3</a></li>
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
                                    <li><a href="#">&#8226; Glyphicons</a></li>
                                    <li><a href="#">&#8226; Widgets</a></li>
                                    <li><a href="#">&#8226; Invoice</a></li>
                                    <li><a href="#">&#8226; Inbox</a></li>
                                    <li><a href="#">&#8226; Calendar</a></li>
                                </ul>

                                <li data-toggle="collapse" data-target="#tables" class="collapsed active">
                                    <a href="#">
                                        <i class="fa fa-table"></i> Tables <i class="fa fa-chevron-down arrow"></i>
                                    </a>
                                </li>
                                <ul class="sub-menu collapse" id="tables">
                                    <li><a href="#">&#8226; Tables</a></li>
                                    <li><a href="#">&#8226; Table Dynamic</a></li>
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
                                    <li><a href="#">&#8226; E-commerce</a></li>
                                    <li><a href="#">&#8226; Projects</a></li>
                                    <li><a href="#">&#8226; Project Detail</a></li>                                    
                                    <li><a href="#">&#8226; Contacts</a></li>
                                    <li><a href="#">&#8226; Profile</a></li>
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
                                    <li><a href="#">&#8226; Login Page</a></li>
                                    <li class="active"><a href="#">&#8226; Pricing Tables</a></li>
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
                </div>
            </div>
        </div>
    </body>
</html>