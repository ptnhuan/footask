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
        $less->compileFile('less/general_Element.less', 'css/general_Element.css');
        ?>
        <link href="css/general_Element.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/flexible-menu.js" type="text/javascript"></script>
        <script src="js/close-element.js" type="text/javascript"></script>
        <script src="js/close-element-1.js" type="text/javascript"></script>
        <script src="js/close-element-2.js" type="text/javascript"></script>
        <script src="js/close-element-3.js" type="text/javascript"></script>
        <script src="js/close-element-4.js" type="text/javascript"></script>
        <script src="js/close-element-5.js" type="text/javascript"></script>
        <script src="js/close-element-6.js" type="text/javascript"></script>
        <script src="js/close-element-7.js" type="text/javascript"></script>
        <script src="js/tooltip.js" type="text/javascript"></script>
        <script src="js/close-element-8.js" type="text/javascript"></script>
        <script src="js/close-element-9.js" type="text/javascript"></script>
        <script src="js/close-element-10.js" type="text/javascript"></script>
        <script src="js/close-element-11.js" type="text/javascript"></script>
        <script src="js/close-element-12.js" type="text/javascript"></script>
        <script src="js/close-onclick.js" type="text/javascript"></script>
        <script src="js/onclick.js" type="text/javascript"></script>
        <script src="js/close-element-13.js" type="text/javascript"></script>
        <script src="js/close-element-14.js" type="text/javascript"></script>
        <script src="js/close-element-15.js" type="text/javascript"></script>
        <script src="js/close-element-16.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-25">
            <div class="container-fuild dashboard">
                <div class="row left">
                    <div class="col-md-2 col-sm-2 col-xs-2 left-col">
                        <div class="scroll-view">
                            <div class="nav_title">
                                <a href="#"class="site_title">
                                    <i class="fa fa-paw"></i> 
                                    <span>Gentelella Alela!</span>
                                </a>
                            </div>
                            <div class="profile clearfix">
                                <div class="col-md-3 profile_pic">
                                    <img src="images/img.jpg" alt="..." class="profile_img">
                                </div>
                                <div class=" col-md-9 profile_info">
                                    <span>Welcome,</span>
                                    <h2>John Doe</h2>
                                </div>
                            </div>
                            <div class="main_menu">
                                <div class="menu_section">
                                    <h3>General</h3>
                                    <ul class="nav">
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#home">
                                                <li>
                                                    <a>
                                                        <i class="fa fa-home"></i> Home 
                                                        <span class="fa fa-chevron-down"></span>
                                                    </a>
                                                </li>
                                                <h5>&nbsp;</h5>
                                            </div>
                                            <div id="home" class="collapse">
                                                <div class="c_home">
                                                    <ul class="nav child_menu">
                                                        <li><a href="john.php">Dashboard</a></li>
                                                        <li><a href="#">Dashboard2</a></li>
                                                        <li><a href="#">Dashboard3</a></li>
                                                    </ul>                  
                                                </div>
                                            </div>
                                        </div>
                                        <!------------------------------------------>
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#from">
                                                <a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                                <h5>&nbsp;</h5>
                                            </div>


                                            <div id="from" class="collapse">
                                                <div class="c_home">
                                                    <ul class="nav child_menu">
                                                        <li><a href="general-form.php">General Form</a></li>
                                                        <li><a href="#">Advanced Components</a></li>
                                                        <li><a href="form-validation.php">Form Validation</a></li>
                                                        <li><a href="form-wizard.php">Form Wizard</a></li>
                                                        <li><a href="Form-upload.php">Form Upload</a></li>
                                                        <li><a href="form-button.php">Form Buttons</a></li>
                                                    </ul>                  
                                                </div>
                                            </div>
                                        </div>
                                        <!------------------------------------------>
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#ui">
                                                <a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                                <h5>&nbsp;</h5>
                                            </div>


                                            <div id="ui" class="collapse">
                                                <div class="c_home">
                                                    <ul class="nav child_menu">
                                                        <li><a href="general_Element.php">General Elements</a></li>
                                                        <li><a href="#">Media Gallery</a></li>
                                                        <li><a href="#">Typography</a></li>
                                                        <li><a href="#">Icons</a></li>
                                                        <li><a href="#">Glyphicons</a></li>
                                                        <li><a href="#">Widgets</a></li>
                                                        <li><a href="#">Invoice</a></li>
                                                        <li><a href="#">Inbox</a></li>
                                                        <li><a href="#">Calendar</a></li>
                                                    </ul>                  
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------------->
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#table">
                                                <a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                                <h5>&nbsp;</h5>
                                            </div>


                                            <div id="table" class="collapse">
                                                <div class="c_home">
                                                    <ul class="nav child_menu">
                                                        <li><a href="#">Tables</a></li>
                                                        <li><a href="#">Table Dynamic</a></li>
                                                    </ul>                  
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------------->
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#data">
                                                <a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                                <h5>&nbsp;</h5>
                                            </div>


                                            <div id="data" class="collapse">
                                                <div class="c_home">
                                                    <ul class="nav child_menu">
                                                        <li><a href="#">Chart JS</a></li>
                                                        <li><a href="#">Chart JS2</a></li>
                                                        <li><a href="#">Moris JS</a></li>
                                                        <li><a href="#">ECharts</a></li>
                                                        <li><a href="#">Other Charts</a></li>
                                                    </ul>                  
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------------->
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#layout">
                                                <a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                                <h5>&nbsp;</h5>
                                            </div>


                                            <div id="layout" class="collapse">
                                                <div class="c_home">
                                                    <ul class="nav child_menu">
                                                        <li><a href="#">Fixed Sidebar</a></li>
                                                        <li><a href="#">Fixed Footer</a></li>
                                                    </ul>                  
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------------->

                                    </ul>
                                </div>
                                <div class="menu_section">
                                    <h3>Live On</h3>
                                    <ul class="nav">
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#page">
                                                <a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                                <h5>&nbsp;</h5>
                                            </div>


                                            <div id="page" class="collapse">
                                                <div class="c_home">
                                                    <ul class="nav child_menu">
                                                        <li><a href="#">E-commerce</a></li>
                                                        <li><a href="#">Projects</a></li>
                                                        <li><a href="#">Project Detail</a></li>
                                                        <li><a href="#">Contacts</a></li>
                                                        <li><a href="#">Profile</a></li>
                                                    </ul>                  
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------------->
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#extras">
                                                <a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                                <h5>&nbsp;</h5>
                                            </div>


                                            <div id="extras" class="collapse">
                                                <div class="c_home">
                                                    <ul class="nav child_menu">
                                                        <li><a href="#">403 Error</a></li>
                                                        <li><a href="#">404 Error</a></li>
                                                        <li><a href="#">500 Error</a></li>
                                                        <li><a href="#">Plain Page</a></li>
                                                        <li><a href="#">Login Page</a></li>
                                                        <li><a href="#">Pricing Tables</a></li>
                                                    </ul>                  
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------------->
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#menu">
                                                <a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                                <h5>&nbsp;</h5>
                                            </div>

                                            <div id="menu" class="collapse">
                                                <div class="c_home">
                                                    <ul class="nav child_menu">
                                                        <li><a href="#">Level One</a></li>
                                                        <li>
                                                            <div type="button" class="bt" data-toggle="collapse" data-target="#level">
                                                                <a class="one">Level One<span class="fa fa-chevron-down"></span></a>
                                                                <h5>&nbsp;</h5>
                                                            </div>
                                                            <div id="level" class="collapse">
                                                                <div class="">
                                                                    <ul class="tow">
                                                                        <li><a href="#">Level Two</a></li>
                                                                        <li><a href="#">Level Two</a></li>
                                                                        <li><a href="#">Level Two</a></li>
                                                                    </ul>                 
                                                                </div>
                                                            </div>


                                                        </li>
                                                        <li><a href="#">Level One</a>
                                                        </li>
                                                    </ul>                  
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------------->
                                        <div class="drop">
                                            <div type="button" class="bt" data-toggle="collapse" data-target="#landing">
                                                <a href="#">
                                                    <i class="fa fa-laptop"></i> Landing Page
                                                    <span class="label label-success pull-right">Coming Soon</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!---------------------------> 
                                    </ul>
                                </div>
                                <!--------------------------->                
                            </div>
                            <div class="sidebar-footer">
                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Logout">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                        <div class="left-repon">
                            <div class="logo-repon">
                                <a href="#"><i class="fa fa-paw"></i>
                                </a> 
                            </div>
                            <div class="menu-repon">
                                <ul>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-home"></i>Home
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="john.php">Dashboard</a></li>
                                            <li><a href="#">Dashboard2</a></li>
                                            <li><a href="#">Dashboard3</a></li>
                                        </ul>
                                    </li>                                  
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-edit"></i>Forms
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="general-form.php">General Form</a></li>
                                            <li><a href="#">Advanced Components</a></li>
                                            <li><a href="form-validation.php">Form Validation</a></li>
                                            <li><a href="form-wizard.php">Form Wizard</a></li>
                                            <li><a href="Form-upload.php">Form Upload</a></li>
                                            <li><a href="form-button.php">Form Buttons</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-desktop"></i> <br>Ul Elements
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="general_Element.php">General Elements</a></li>
                                            <li><a href="#">Media Gallery</a></li>
                                            <li><a href="#">Typography</a></li>
                                            <li><a href="#">Icons</a></li>
                                            <li><a href="#">Glyphicons</a></li>
                                            <li><a href="#">Widgets</a></li>
                                            <li><a href="#">Invoice</a></li>
                                            <li><a href="#">Inbox</a></li>
                                            <li><a href="#">Calendar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-table"></i>Tables
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Tables</a></li>
                                            <li><a href="#">Table Dynamic</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-bar-chart-o"></i>Data presentation
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Chart JS</a></li>
                                            <li><a href="#">Chart JS2</a></li>
                                            <li><a href="#">Moris JS</a></li>
                                            <li><a href="#">ECharts</a></li>
                                            <li><a href="#">Other Charts</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-clone"></i>Layouts
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Fixed Sidebar</a></li>
                                            <li><a href="#">Fixed Footer</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-bug"></i> Additional Pages
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">E-commerce</a></li>
                                            <li><a href="#">Projects</a></li>
                                            <li><a href="#">Project Detail</a></li>
                                            <li><a href="#">Contacts</a></li>
                                            <li><a href="#">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-windows"></i> Extras
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">403 Error</a></li>
                                            <li><a href="#">404 Error</a></li>
                                            <li><a href="#">500 Error</a></li>
                                            <li><a href="#">Plain Page</a></li>
                                            <li><a href="#">Login Page</a></li>
                                            <li><a href="#">Pricing Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-sitemap"></i>Multilevel Menu
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>
                                            <li><a href="#">Level One</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">
                                            <i class="fa fa-laptop"></i>Landing Page
                                            <span class=" pull-right">Coming Soon</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12 right-col">
                        <div class="row nav_menu">
                            <nav>
                                <a href="#menu-toggle" id="menu-toggle" class="btn btn-default toggled"><i class="fa fa-bars"></i></a>
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
                                                            <span class="badge bg-red pull-right">50%</span>
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li><a>Help</a></li>
                                                    <li><a><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                        <div class="page-title">
                            <div class="title_left">
                                <h3>General Elements</h3>
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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class=" content">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#element"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
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
                                    <div id="element">
                                        <div class="">
                                            <ul class="nav nav-tabs bar_tabs">
                                                <li class="active"><a href="#tab1" data-toggle="tab" >Home</a>
                                                </li>
                                                <li><a href="#tab2" data-toggle="tab">Profile</a>
                                                </li>
                                                <li><a href="#tab3" data-toggle="tab">Profile</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane  active in" id="tab1">
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                                        synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                                </div>
                                                <div class="tab-pane " id="tab2">
                                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                        booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                                </div>
                                                <div class="tab-pane " id="tab3">
                                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                        booth letterpress, commodo enim craft beer mlkshk </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content1">
                                <div class="x_panel1">
                                    <div class="x_title">
                                        <h2><i class="fa fa-bars"></i> Tabs <small>Float right</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#element1"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-wrench"></i></a>
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
                                    <div id="element1">
                                        <div class="">
                                            <ul class="nav nav-tabs bar_tabs right">
                                                <li class="active"><a href="#tab4" data-toggle="tab">Home</a></li>
                                                <li><a href="#tab5" data-toggle="tab" >Profile</a></li>
                                                <li><a href="#tab6" data-toggle="tab" >Profile</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane  active in" id="tab4">
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                                        synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                                </div>
                                                <div class="tab-pane" id="tab5">
                                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                        booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                                </div>
                                                <div class="tab-pane" id="tab6">
                                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                        booth letterpress, commodo enim craft beer mlkshk </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!--------------------------------------->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class=" content2 ">
                                <div class="x_panel2">
                                    <div class="x_title">
                                        <h2><i class="fa fa-bars"></i> Vertical Tabs <small>Float left</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element2"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="element2">
                                        <div class="col-xs-3">
                                            <ul class="nav nav-tabs tabs-left">
                                                <li class="active"><a href="#home" data-toggle="tab">Home</a>
                                                </li>
                                                <li><a href="#profile" data-toggle="tab">Profile</a>
                                                </li>
                                                <li><a href="#messages" data-toggle="tab">Messages</a>
                                                </li>
                                                <li><a href="#settings" data-toggle="tab">Settings</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="home">
                                                    <p class="lead">Home tab</p>
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                                        synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                                </div>
                                                <div class="tab-pane" id="profile">Profile Tab.</div>
                                                <div class="tab-pane" id="messages">Messages Tab.</div>
                                                <div class="tab-pane" id="settings">Settings Tab.</div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content3 ">
                                <div class="x_panel3">
                                    <div class="x_title">
                                        <h2><i class="fa fa-bars"></i> Vertical Tabs <small>Float right</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#element3"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="element3">
                                        <div class="col-xs-9">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="home1">
                                                    <p class="lead">Home tab</p>
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                                        synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                                </div>
                                                <div class="tab-pane" id="profile1">Profile Tab.</div>
                                                <div class="tab-pane" id="messages1">Messages Tab.</div>
                                                <div class="tab-pane" id="settings1">Settings Tab.</div>
                                            </div>
                                        </div>

                                        <div class="col-xs-3">
                                            <ul class="nav nav-tabs tabs-right">
                                                <li class="active"><a href="#home1" data-toggle="tab">Home</a>
                                                </li>
                                                <li><a href="#profile1" data-toggle="tab">Profile</a>
                                                </li>
                                                <li><a href="#messages1" data-toggle="tab">Messages</a>
                                                </li>
                                                <li><a href="#settings1" data-toggle="tab">Settings</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=" col-md-6 col-sm-6 col-xs-12">
                            <div class="content4">
                                <div class="x_panel4">
                                    <div class="x_title">
                                        <h2><i class="fa fa-align-left"></i> Collapsible / Accordion <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element4"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu">
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
                                    <div id="element4">
                                        <div class="accordion">
                                            <div class="panel">
                                                <a class="panel-heading" data-toggle="collapse" href="#collapseOne1">
                                                    <h4>Collapsible Group Items #1</h4>
                                                </a>
                                                <div id="collapseOne1" class="collapse in">
                                                    <div class="body">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>First Name</th>
                                                                    <th>Last Name</th>
                                                                    <th>User Name</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th >2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>3</th>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <a class="panel-heading" data-toggle="collapse" href="#collapseTwo1">
                                                    <h4>Collapsible Group Items #2</h4>
                                                </a>
                                                <div id="collapseTwo1" class=" collapse">
                                                    <div class="body">
                                                        <p><strong>Collapsible Item 2 data</strong>
                                                        </p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <a class="panel-heading "  data-toggle="collapse"href="#collapseThree1" >
                                                    <h4>Collapsible Group Items #3</h4>
                                                </a>
                                                <div id="collapseThree1" class=" collapse">
                                                    <div class="body">
                                                        <p><strong>Collapsible Item 3 data</strong>
                                                        </p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
                            <div class="content5 ">
                                <div class="x_panel5">
                                    <div class="x_title">
                                        <h2><i class="fa fa-align-left"></i> Collapsible / Accordion <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element5"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu">
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
                                    <div id="element5">
                                        <div class="accordion">
                                            <div class="panel">
                                                <a class="panel-heading" data-toggle="collapse" href="#collapseOne">
                                                    <h4>Collapsible Group Items #1</h4>
                                                </a>
                                                <div id="collapseOne" class="collapse in">
                                                    <div class="body">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>First Name</th>
                                                                    <th>Last Name</th>
                                                                    <th>User Name</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th >2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>3</th>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <a class="panel-heading" data-toggle="collapse" href="#collapseTwo">
                                                    <h4>Collapsible Group Items #2</h4>
                                                </a>
                                                <div id="collapseTwo" class=" collapse">
                                                    <div class="body">
                                                        <p><strong>Collapsible Item 2 data</strong>
                                                        </p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <a class="panel-heading "  data-toggle="collapse"href="#collapseThree" >
                                                    <h4>Collapsible Group Items #3</h4>
                                                </a>
                                                <div id="collapseThree" class=" collapse">
                                                    <div class="body">
                                                        <p><strong>Collapsible Item 3 data</strong>
                                                        </p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class=" content6">
                                <div class="x_panel6">
                                    <div class="x_title">
                                        <h2>Tooltips <small>Hover to view</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element6"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu">
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
                                    <div id="element6">
                                        <p>Add small overlays of content for housing secondary information.</p>
                                        <button type="button" class="btn btn-default">Left</button>
                                        <button type="button" class="btn btn-default">Top</button>
                                        <button type="button" class="btn btn-default"> Bottom</button>
                                        <button type="button" class="btn btn-default"> Right</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content7 ">
                                <div class="x_panel7">
                                    <div class="x_title">
                                        <h2>Tooltips <small>Hover to view</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element7"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a id="close-link7"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element7">
                                        <p>Hover over the links below to see tooltips:</p>
                                        <button type="button" class="btn btn-default"  data-placement="left" title="Tooltip left">
                                            Tooltip Left
                                        </button>
                                        <button type="button" class="btn btn-default" data-placement="top" title="Tooltip top">
                                            Tooltip Top
                                        </button>
                                        <button type="button" class="btn btn-default"data-placement="bottom" title="Tooltip bottom">
                                            Tooltip Bottom
                                        </button>
                                        <button type="button" class="btn btn-default"  data-placement="right" title="Tooltip right">
                                            Tooltip Right
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content8">
                                <div class="x_panel8">
                                    <div class="x_title">
                                        <h2>Daily active users <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element8"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link8"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element8">
                                        <div class="timeline">
                                            <div class="list-unstyled ">
                                                <div class="block">
                                                    <div class="tags">
                                                        <a href="" class="tag">
                                                            <span>Entertainment</span>
                                                        </a>
                                                    </div>
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                    <div class="circle"></div>
                                                </div> 
                                            </div>
                                            <div class="list-unstyled ">
                                                <div class="block">
                                                    <div class="tags">
                                                        <a href="" class="tag">
                                                            <span>Entertainment</span>
                                                        </a>
                                                    </div>
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                            <div class="list-unstyled unstyle ">
                                                <div class="block">
                                                    <div class="tags">
                                                        <a href="" class="tag">
                                                            <span>Entertainment</span>
                                                        </a>
                                                    </div>
                                                    <div class="block_content">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                    <div class="circle"></div>
                                                </div>
                                            </div>



                                        </div>

                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content9">
                                <div class="x_panel9">
                                    <div class="x_title">
                                        <h2>Daily active users <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element9"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a id="close-link9"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element9">
                                        <div class="jumbotron">
                                            <h1>Hello, world!</h1>
                                            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content10">
                                <div class="x_panel10">
                                    <div class="x_title">
                                        <h2><i class="fa fa-chevron-down"></i> Dropdowns <small>Multiple dropdown designs</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element10"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a id="close-link10"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element10">
                                        <p>Gentelella provides you with several dropdown designs for your choosing.</p>
                                        <ul class="nav nav-pills">
                                            <li><a href="#">Regular link</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    Dropdown
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    Dropdown
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu ">
                                                    <li><a  href="#">Action</a></li>
                                                    <li><a  href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    Dropdown
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content11 ">
                                <div class="x_panel11">
                                    <div class="x_title">
                                        <h2><i class="fa fa-square-o"></i> Modals</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element11"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a id="close-link11"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element11">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                        <div class="modal fade bs-example-modal-lg">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Text in a modal</h4>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                        <div class="modal fade bs-example-modal-sm">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title">Modal title</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Text in a modal</h4>
                                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /modals -->
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content12">
                                <div class="x_panel12">
                                    <div class="x_title">
                                        <h2><i class="fa fa-bell"></i> Notifications <small>Styled &amp; Custom notifications</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element12"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a id="close-link12"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element12">
                                        <p>Regular notifications</p> 
                                        <div class="onclick-button">
                                            <button class="btn btn-default" onclick="myFunction()"> Success</button>
                                            <button class="btn btn-default" onclick="myFunction1()"> Info</button>
                                            <button class="btn btn-default" onclick="myFunction2()"> Notice</button>
                                            <button class="btn btn-default" onclick="myFunction3()"> Error</button>
                                            <button class="btn btn-default" onclick="myFunction4()"> Dard</button>

                                            <div id="onclick">
                                                <div class="btn-button success">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Regular Success </span>
                                                    <a id="close-link-onclick">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> That thing that you were trying to do worked! </p>

                                                </div>

                                            </div> 
                                            <!------------------------------------------>

                                            <div id="onclick1">
                                                <div class="btn-button info">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> New Thing </span>
                                                    <a id="close-link-onclick1">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Just to let you know, something happened.</p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>                                       

                                            <div id="onclick2">
                                                <div class="btn-button notice">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Regular Notice </span>
                                                    <a id="close-link-onclick2">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Check me out! I'm a notice. </p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>

                                            <div id="onclick3">
                                                <div class=" btn-button error">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Oh No! </span>
                                                    <a id="close-link-onclick3">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Something terrible happened. </p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>

                                            <div id="onclick4">
                                                <div class="btn-button dark">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Oh No! </span>
                                                    <a id="close-link-onclick4">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Something terrible happened. </p>
                                                </div>
                                            </div>                        
                                        </div>
                                        <hr>
                                        <!------------------------------------------>
                                        <p>Sticky notifications.. these wont close unless user closes them.</p> 
                                        <div class="onclick-button">
                                            <button class="btn btn-default" onclick="myFunction5()"> Success</button>
                                            <button class="btn btn-default" onclick="myFunction6()"> Info</button>
                                            <button class="btn btn-default" onclick="myFunction7()">Warning</button>
                                            <button class="btn btn-default" onclick="myFunction8()"> Error</button>
                                            <button class="btn btn-default" onclick="myFunction9()"> Dard</button>
                                            <div id="onclick5">
                                                <div class="btn-button success">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Sticky Success </span>
                                                    <a id="close-link-onclick5">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky success... I'm not even gonna make a joke. </p>

                                                </div>

                                            </div> 
                                            <!------------------------------------------>
                                            <div id="onclick6">
                                                <div class="btn-button info">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Sticky Info </span>
                                                    <a id="close-link-onclick6">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky Info... I'm not even gonna make a joke.</p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>                                       
                                            <div id="onclick7">
                                                <div class="btn-button notice">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span>  Sticky Warning </span>
                                                    <a id="close-link-onclick7">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky Warning... I'm not even gonna make a joke. </p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>
                                            <div id="onclick8">
                                                <div class=" btn-button error">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Sticky Danger </span>
                                                    <a id="close-link-onclick8">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky Warning... I'm not even gonna make a joke. </p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>
                                            <div id="onclick9">
                                                <div class="btn-button dark">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Sticky Success </span>
                                                    <a id="close-link-onclick9">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky success... I'm not even gonna make a joke. </p>
                                                </div>
                                            </div>                        
                                        </div>
                                        <hr>
                                        <!------------------------------------------>
                                        <div class="onclick-button">
                                            <button class="btn btn-default" onclick="myFunction10()"> Non-Blocking Notice</button>
                                            <div id="onclick10">
                                                <div class="btn-button dark">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Non-Blocking Notice </span>
                                                    <a id="close-link-onclick10">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> When you hover over me I'll fade to show the elements underneath.
                                                        Feel free to click any of them just like I wasn't even here.</p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>                                                           
                                        </div>
                                        <hr>
                                        <!------------------------------------------>
                                        <div class="onclick-button">
                                            <button class="btn btn-default"> Success</button>   
                                            <button class="btn btn-default"> Info</button>  
                                            <button class="btn btn-default"> Waring</button>  
                                            <button class="btn btn-default"> Error</button> 
                                            <button class="btn btn-default"> Dark</button>  
                                            <!------------------------------------------>                                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content13">
                                <div class="x_panel13">
                                    <div class="x_title">
                                        <h2>Pop Overs <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element13"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link13"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element13">
                                        <div class="alert alert-success ">
                                            <button type="button" class="close" data-dismiss="alert" ><span aria-hidden="true">×</span></button>
                                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                                        </div>
                                        <div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                                        </div>
                                        <div class="alert alert-warning">
                                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                                        </div>
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" ><span aria-hidden="true">×</span></button>
                                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6 col-md-6 col-xs-12">
                            <div class="content14">
                                <div class="x_panel14">
                                    <div class="x_title">
                                        <h2><i class="fa fa-align-left"></i> Progress bar<small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element14"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link14"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element14">
                                        <p>Bootstrap progress bar with animated loading bar, add right to .progress to align right</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="progress right">
                                                    <div class="progress-bar progress-bar-danger"style="width: 25%;"></div>
                                                </div>
                                                <div class="progress right">
                                                    <div class="progress-bar progress-bar-warning"style="width: 45%;"></div>
                                                </div>
                                                <div class="progress right">
                                                    <div class="progress-bar progress-bar-info"style="width: 65%;"></div>
                                                </div>
                                                <div class="progress right">
                                                    <div class="progress-bar progress-bar-success"style="width: 95%;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-danger"style="width: 25%;"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning"style="width: 45%;"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info"style="width: 65%;"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" style="width: 95%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <ul class="verticle_bars list-inline">
                                                    <li>
                                                        <div class="progress progress-striped vertical progress_wide bottom">
                                                            <div class="progress-bar progress-bar-danger" style="height: 25%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress progress-striped vertical progress_wide bottom">
                                                            <div class="progress-bar progress-bar-warning" style="height: 45%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide bottom">
                                                            <div class="progress-bar progress-bar-info"  style="height: 65%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide bottom">
                                                            <div class="progress-bar  progress-bar-success" style="height: 85%;"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <ul class="verticle_bars list-inline">
                                                    <li>
                                                        <div class="progress vertical bottom">
                                                            <div class="progress-bar  progress-bar-success"style="height: 85%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical bottom">
                                                            <div class="progress-bar progress-bar-info"style="height: 65%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical bottom">
                                                            <div class="progress-bar progress-bar-warning" style="height: 45%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical bottom">
                                                            <div class="progress-bar progress-bar-danger" style="height: 25%;"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <ul class="verticle_bars list-inline">
                                                    <li>
                                                        <div class="progress vertical progress_wide">
                                                            <div class="progress-bar progress-bar-danger progress-bar-striped" style="height: 25%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide">
                                                            <div class="progress-bar progress-bar-warning progress-bar-striped"style="height: 45%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide">
                                                            <div class="progress-bar progress-bar-info" style="height: 65%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide">
                                                            <div class="progress-bar  progress-bar-success"style="height: 85%;"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-12 ">
                                                <ul class="verticle_bars list-inline">
                                                    <li>
                                                        <div class="progress vertical">
                                                            <div class="progress-bar  progress-bar-success"style="height: 85%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical">
                                                            <div class="progress-bar progress-bar-info"  style="height: 65%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical">
                                                            <div class="progress-bar progress-bar-warning"style="height: 45%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical">
                                                            <div class="progress-bar progress-bar-danger" style="height: 25%;"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content15 ">
                                <div class="x_panel15">
                                    <div class="x_title">
                                        <h2>To Do List <small>Sample tasks</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element15"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link15"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element15">
                                        <ul class="to-do">
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Schedule meeting with new client </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Create email address for new intern</a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Have IT fix the network printer</a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Copy backups to offsite location</a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="content16 ">
                                <div class="x_panel16">
                                    <div class="x_title">
                                        <h2>Daily active users <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element16"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link16"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element16">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a>
                                                    <span class="image">
                                                        <img src="images/img.jpg" alt="img">
                                                    </span>
                                                    <span>
                                                        <span>John Smith</span>
                                                        <span class="time">3 mins ago</span>
                                                    </span>
                                                    <span class="message">
                                                        Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <span class="image">
                                                        <img src="images/img.jpg" alt="img">
                                                    </span>
                                                    <span>
                                                        <span>John Smith</span>
                                                        <span class="time">3 mins ago</span>
                                                    </span>
                                                    <span class="message">
                                                        Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <span class="image">
                                                        <img src="images/img.jpg" alt="img">
                                                    </span>
                                                    <span>
                                                        <span>John Smith</span>
                                                        <span class="time">3 mins ago</span>
                                                    </span>
                                                    <span class="message">
                                                        Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <span class="image">
                                                        <img src="images/img.jpg" alt="img">
                                                    </span>
                                                    <span>
                                                        <span>John Smith</span>
                                                        <span class="time">3 mins ago</span>
                                                    </span>
                                                    <span class="message">
                                                        Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
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

        </div>
    </body>
</html>




