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
        $less->compileFile('less/form_upload.less', 'css/form_upload.css');
        ?>
        <link href="css/form_upload.css" rel="stylesheet" type="text/css"/>
        <script src="js/form_upload/jquery.min.js" type="text/javascript"></script>
        <script src="js/form_upload/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/form_upload/side-bar.js" type="text/javascript"></script>
        <script src="js/form_upload/close-upload.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="type-25">
            <div class="container-fluid dashboard">
                <div class="row left-col">
                    <div id="left-col" class="active">
                        <div id="sidebar-wrapper">
                            <div class="sidebar-nav">
                                <div class="">
                                    <a href="#"class="site_title">                                        
                                        <i class="fa fa-paw"></i> 
                                        <span class="alela">Gentelella Alela!</span>

                                    </a>
                                    <div class="clearfix"></div>
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
                            </div>
                        </div>


                    </div>
                    <!---------------------End-Left-col-------------------->
                    <div class="right-col">
                        <div class="nav_menu">
                            <nav>
                                <a href="#" id="menu-toggle"><i class="fa fa-bars"></i></a>
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
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Form Upload</h3>
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
                                        <h2>Dropzone multiple file uploader</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#upload" ><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="upload">
                                        <p>Drag multiple files to the box below for multi upload or click to select files. 
                                            This is for demonstration purposes only, the files are not uploaded to any server.</p>
                                        <form class="dropzone dz-clickable">
                                            <div class="dz-message">
                                                <span>Drop files here to upload</span>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
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




