<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content e-commerce</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-10.less', 'css/type-10.css');
        ?>
        <link rel="stylesheet" href="css/type-10.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/slide-img.js" type="text/javascript"></script>
        <script src="js/hover-menu.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-10">
            <header class="top-bar">
                <div class="container">   
                    <div class="row">
                        <div class="col-md-6">
                            <div class="topbar-left">
                                <ul>
                                    <li><a href="#"><i class="fa fa-sign-in"></i>Login / Sign up</a></li>
                                    <li><i class="fa fa-phone"></i>(519) - 875 - 9822</li>
                                    <li><i class="fa fa-envelope"></i>info@Aristotle.edu</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="topbar-right">
                                <ul>
                                    <li>
                                        <form method="get" action="#" class="search-bar">
                                            <input class="form-control" type="search" placeholder="search infomation...">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </li>
                                    <li>
                                        <div class="cart">
                                            <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                            <span class="number-cart">1</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <nav class="nav-main">
                <div class="nav-list">
                    <ul class="collapse navbar-collapse">
                        <li class="dropdown">
                            <a href="#" class="parent-menu dropdown-toggle" data-toggle="dropdown">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                                <li><a href="#">Home 4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="parent-menu dropdown-toggle" data-toggle="dropdown">blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">blog 1</a></li>
                                <li><a href="#">blog 2</a></li>
                                <li><a href="#">blog 3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="parent-menu dropdown-toggle" data-toggle="dropdown">events</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">event 1</a></li>
                                <li><a href="#">event 2</a></li>
                                <li><a href="#">event 3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="parent-menu dropdown-toggle" data-toggle="dropdown">course</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">coureses 1</a></li>
                                <li><a href="#">coureses 2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="parent-menu dropdown-toggle" data-toggle="dropdown">page</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">page 1</a></li>
                                <li><a href="#">page 2</a></li>
                                <li><a href="#">page 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="parent-menu">contact</a></li>
                    </ul>
                </div>
                <a href="#" class="toggle-btn pull-right"><i class="fa fa-bars"></i></a>
                <div class="logo">
                    <a class="center-header" href="index.html"><img src="images/logo-1.png" alt=""></a>
                </div>
            </nav>
            <div class="banner">
                <div class="inner-banner">
                    <div class="main-heading">
                        <h2>
                            <em>Courses Gird</em>
                            <span>C</span>
                        </h2>
                        <span class="sperater">
                            <hr>
                            <i></i>
                            <i class="active"></i>
                            <i></i>
                            <hr>
                        </span>
                    </div>
                    <div class="curpage">
                        <ul>
                            <li>Home</li>
                            <li id="sympol">&#9679;</li>
                            <li><a href="#">Events</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="infor-full">
                                <img src="images/image_1.jpg" alt=""/>
                                <div class="date">
                                    <span>Jun</span><br>27
                                </div>

                                <div class="title">
                                    <p>What is Lorem Ipsum?</p>
                                </div>
                                <div class="thumbs">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-chain"></i> Web desgin</a></li>
                                        <li><a href="#"><i class="fa fa-chain"></i> Ux-ui</a></li>
                                    </ul>
                                </div>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 12 like</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 5 comment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="infor-full">
                                <img src="images/image_1.jpg" alt=""/>
                                <div class="date">
                                    <span>Jun</span><br>27
                                </div>

                                <div class="title">
                                    <p>What is Lorem Ipsum?</p>
                                </div>
                                <div class="thumbs">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-chain"></i> Web desgin</a></li>
                                        <li><a href="#"><i class="fa fa-chain"></i> Ux-ui</a></li>
                                    </ul>
                                </div>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 12 like</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 5 comment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="infor-full">
                                <img src="images/image_1.jpg" alt=""/>
                                <div class="date">
                                    <span>Jun</span><br>27
                                </div>

                                <div class="title">
                                    <p>What is Lorem Ipsum?</p>
                                </div>
                                <div class="thumbs">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-chain"></i> Web desgin</a></li>
                                        <li><a href="#"><i class="fa fa-chain"></i> Ux-ui</a></li>
                                    </ul>
                                </div>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 12 like</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 5 comment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="infor-full">
                                <img src="images/image_1.jpg" alt=""/>
                                <div class="date">
                                    <span>Jun</span><br>27
                                </div>

                                <div class="title">
                                    <p>What is Lorem Ipsum?</p>
                                </div>
                                <div class="thumbs">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-chain"></i> Web desgin</a></li>
                                        <li><a href="#"><i class="fa fa-chain"></i> Ux-ui</a></li>
                                    </ul>
                                </div>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 12 like</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 5 comment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="infor-full">
                                <img src="images/image_1.jpg" alt=""/>
                                <div class="date">
                                    <span>Jun</span><br>27
                                </div>

                                <div class="title">
                                    <p>What is Lorem Ipsum?</p>
                                </div>
                                <div class="thumbs">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-chain"></i> Web desgin</a></li>
                                        <li><a href="#"><i class="fa fa-chain"></i> Ux-ui</a></li>
                                    </ul>
                                </div>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 12 like</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 5 comment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="infor-full">
                                <img src="images/image_1.jpg" alt=""/>
                                <div class="date">
                                    <span>Jun</span><br>27
                                </div>

                                <div class="title">
                                    <p>What is Lorem Ipsum?</p>
                                </div>
                                <div class="thumbs">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-chain"></i> Web desgin</a></li>
                                        <li><a href="#"><i class="fa fa-chain"></i> Ux-ui</a></li>
                                    </ul>
                                </div>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                                <div class="footer-content">
                                    <ul>
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 12 like</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 5 comment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="newsletter">
                    <h5>NEWSLETTER</h5>
                    <div class="input-email">
                        <input type="text" placeholder="Enter your mail" class="form-control">
                        <a href="#"><i class="fa fa-send"></i></a>
                    </div>
                </div>
                <div class="footer-cols">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="footer-logo-widget">
                                    <img src="images/footer-logo.png" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                    <div class="social-icons">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="footer-list-widget">
                                    <div class="clearfix"></div>
                                    <h3>ADMISSIONS</h3>
                                    <ul>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">Theme Overview</a></li>
                                        <li><a href="#">Colleges &amp; Schools</a></li>
                                        <li><a href="#">Course catalog</a></li>
                                        <li><a href="#">Single Course</a></li>
                                        <li><a href="#">Theme Overview</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="footer-list-widget">
                                    <h3>QUICK LINKS</h3>
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">College Administration</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Locations</a></li>
                                        <li><a href="#">Our Mission</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="footer-address-widget">
                                    <h3>CONTACT US</h3>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i>PO Box CT16122 Collins Street West, Victoria 8007,</li>
                                        <li><i class="fa fa-mobile"></i>Australia.</li>
                                        <li><i class="fa fa-envelope-o"></i>+81 (2) 345 6789</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-gallery">

                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="images/img-01.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/img-02.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img src="images/img-03.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="gallery-box">
                        <i class="fa fa-instagram"></i> Aristotle_UNV
                    </div>
                </div>
                <div class="text-footer">
                    © Copyright 2015. Powered by WordPress. Aristotle by Sunrise theme
                </div>
            </footer>
        </div>
    </body>
</html>