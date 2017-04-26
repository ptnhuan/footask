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
        $less->compileFile('less/project_detail.less', 'css/project_detail.css');
        ?>
        <link rel="stylesheet" href="css/project_detail.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/back-to-top.js" type="text/javascript"></script>
        <script src="js/sidebar-left.js" type="text/javascript"></script>
        <script src="js/collapse-close.js" type="text/javascript"></script>
        <script src="js/canvasjs.min.js" type="text/javascript"></script>
        <script src="js/chart-dynamic.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="project_detail">
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
                                                <li><a href="project_detail.php">Project Detail</a></li>
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
                                <a href="../dashboard2/index.php"><i class="fa fa-paw"></i></a>
                            </div>
                            <nav class="menu-res">
                                <ul>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-home"></i><h5>Home</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dashboard</a></li>
                                            <li><a href="../dashboard2/index.php">Dashboard2</a></li>
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
                                            <i class="fa fa-laptop"></i><h5>UI Elements</h5>
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
                                            <i class="fa fa-bug"></i><h5>Additional Pages</h5>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="../e_commerce/e_commerce.php">E-commerce</a></li>
                                            <li><a href="../projects/projects.php">Projects</a></li>
                                            <li><a href="project_detail.php">Project Detail</a></li>                                    
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
                            <div class="content">
                                <div class="row">
                                    <div class="content-left col-md-6 col-sm-6 col-xs-6">
                                        <h3>Project Detail <small>design</small></h3>
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
                                            <h3>
                                                New Partner Contracts Consultancy
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
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <ul class="detail-overview">
                                                        <li>
                                                            <p>
                                                                Estimated budget <br><b>2300</b>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                Total amount spent <br><b>2000</b>
                                                            </p>
                                                        </li>
                                                        <li class="border-none">
                                                            <p>
                                                                Estimated project duration <br><b>20</b>
                                                            </p>
                                                        </li>
                                                    </ul><br><br>
                                                    <div id="chartDynamicContainer"></div>
                                                    <h5>Recent Activity</h5>
                                                    <ul class="recent-activity">
                                                        <li>
                                                            <img src="images/img.jpg" alt="" class="img-user">
                                                            <div class="date-comment">
                                                                <h3>24</h3>
                                                                <p>May</p>
                                                            </div>
                                                            <div class="comment-content">
                                                                <h4>Desmond Davison</h4>
                                                                <p class="content">
                                                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.
                                                                </p><br>
                                                                <a href="#" class="link-file">
                                                                    <i class="fa fa-paperclip"></i> User Acceptance Test.doc
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <img src="images/picture.jpg" alt="" class="img-user">
                                                            <div class="date-comment">
                                                                <h3>21</h3>
                                                                <p>May</p>
                                                            </div>
                                                            <div class="comment-content">
                                                                <h4>Brian Michaels</h4>
                                                                <p class="content">
                                                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.
                                                                </p><br>
                                                                <a href="#" class="link-file">
                                                                    <i class="fa fa-paperclip"></i> Download
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <img src="images/img.jpg" alt="" class="img-user">
                                                            <div class="date-comment">
                                                                <h3>24</h3>
                                                                <p>May</p>
                                                            </div>
                                                            <div class="comment-content">
                                                                <h4>Desmond Davison</h4>
                                                                <p class="content">
                                                                    Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.
                                                                </p><br>
                                                                <a href="#" class="link-file">
                                                                    <i class="fa fa-paperclip"></i> User Acceptance Test.doc
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                    <h4 class="title-des">Project Description</h4>
                                                    <div class="project-description">
                                                        <h3><i class="fa fa-paint-brush"> Gentelella</i></h3>
                                                        <p>
                                                            Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.
                                                        </p>
                                                        <div class="location-company">
                                                            <b>Client Company</b>Deveint Inc
                                                            <b>Project Leader</b>Tony Chicken
                                                        </div>
                                                        <div class="project-files">
                                                            <b>Project files</b>
                                                            <br>
                                                            <a href="#" class="files"><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                                                            <a href="#" class="files"><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                                                            <a href="#" class="files"><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                                                            <a href="#" class="files"><i class="fa fa-picture-o"></i> Logo.png</a>
                                                            <a href="#" class="files"><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                                                        </div>     
                                                        <div class="button-function">
                                                            <a href="#" class="btn-add">Add files</a>
                                                            <a href="#" class="btn-report">Report contact</a>
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