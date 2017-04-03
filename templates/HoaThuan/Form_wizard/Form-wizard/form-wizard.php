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
        $less->compileFile('less/form-wizard.less', 'css/form-wizard.css');
        ?>
        <link href="css/form-wizard.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/demo.js" type="text/javascript"></script>
        <script src="js/nump1.js" type="text/javascript"></script>
        <script src="js/flexible-menu.js" type="text/javascript"></script>
        <script src="js/25-19.js" type="text/javascript"></script>
        <script src="js/jquery.smartWizard.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-25">
            <div class="container-fluid dashboard">
                <div class="col-md-2 left-col">
                    <div class="nav_title">
                        <a href="#"class="site_title">
                            <i class="fa fa-paw"></i> 
                            <span>Gentelella Alela!</span>
                        </a>
                    </div>
                    <div class="clearfix">
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
                                                <li><a href="#">Dashboard</a></li>
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
                                                <li><a href="#">General Form</a></li>
                                                <li><a href="#">Advanced Components</a></li>
                                                <li><a href="#">Form Validation</a></li>
                                                <li><a href="#">Form Wizard</a></li>
                                                <li><a href="#">Form Upload</a></li>
                                                <li><a href="#">Form Buttons</a></li>
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
                                                <li><a href="#">General Elements</a></li>
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
                                                        <div class="c_level">
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
                <div class="col-md-10 right-col">
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
                            <h3>Form Wizards</h3>
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
                    <div class="row content2">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Wizards <small class="sessions">Sessions</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a data-toggle="collapse" href="#wizards" ><i class="fa fa-chevron-up"></i></a>
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
                                <div id="wizards">
                                    <p>This is a basic form wizard example that inherits the colors from the selected scheme.</p>
                                    <div id="wizard" class="swMain">
                                        <ul class="anchor">
                                            <li>
                                                <a href="#step-1" class="selected first-child" isdone="1" rel="1">
                                                    <span class="step_no">1</span>
                                                    <span class="step_descr">
                                                        Step 1<br>
                                                        <small>Step 1 description</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-2" class="disabled demo2" isdone="0" rel="2">
                                                    <span class="step_no">2</span>
                                                    <span class="step_descr">
                                                        Step 2<br>
                                                        <small>Step 2 description</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-3" class="disabled demo" isdone="0" rel="3">
                                                    <span class="step_no">3</span>
                                                    <span class="step_descr">
                                                        Step 3<br>
                                                        <small>Step 3 description</small>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-4" class="disabled last-child" isdone="0" rel="4">
                                                    <span class="step_no">4</span>
                                                    <span class="step_descr">
                                                        Step 4<br>
                                                        <small>Step 4 description</small>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="step-1">	
                                            <form class="form-horizontal">

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span>*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text"required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span>*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="text"name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="btn-group" data-toggle="buttons">
                                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                                            </label>
                                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                <input type="radio" name="gender" value="female"> Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span>*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input class="form-control col-md-7 col-xs-12" required="required" type="text">
                                                    </div>
                                                </div>

                                            </form>          			
                                        </div>
                                        <div id="step-2">
                                            <h2>Step 2 Content</h2>
                                            <br>
                                            <p>
                                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>                    
                                        <div id="step-3">
                                            <h2>Step 3 Content</h2>
                                            <br>                             
                                            <p>
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div id="step-4">
                                            <h2>Step 4 Content</h2>
                                            <br>                                                
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <h2 class="example">Example: Vertical Style</h2>

                                    <div id="wizard1" class="swMain1">
                                        <ul>
                                            <li>
                                                <a href="#step-5"  class="selected">                                                      
                                                    <span class="step_no">1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-6" class="disabled">                                                        
                                                    <span class="step_no">2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-7" class="disabled">
                                                    <span class="step_no">3</span>                   
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#step-8" class="disabled first-child">                                                        
                                                    <span class="step_no">4  </span>                   
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="step-5">
                                            <h2 class="step">Step 1 Content</h2>
                                            <br>
                                            <form class="form-horizontal">
                                                <br>                                                    
                                                <span class="section">Personal Info</span>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3" for="first-name">First Name <span>*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="text"required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3" for="last-name">Last Name <span>*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input type="text"name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="middle-name" class="control-label col-md-3 col-sm-3">Middle Name / Initial</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3">Gender</label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="btn-group" data-toggle="buttons">
                                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                                            </label>
                                                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                <input type="radio" name="gender" value="female" checked=""> Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3">Date Of Birth <span>*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6">
                                                        <input class="form-control col-md-7 col-xs-12" required="required" type="text">
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                        <div id="step-6">
                                            <h2 class="step">Step 2 Content</h2>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>                     
                                        <div id="step-7">
                                            <h2 class="step">Step 3 Content</h2>	
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>               				          
                                        </div>
                                        <div id="step-8">
                                            <h2 class="StepTitle">Step 4 Content</h2>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>                			
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <footer>
                        <div class="pull-right">
                            Gentelella - Bootstrap Admin Template by <a href="#">Colorlib</a>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                </div>

            </div>
        </div>
    </body>
</html>




