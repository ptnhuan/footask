<?php
$url_host = $_SERVER['HTTP_HOST'];


$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];
?>

<div class="type-4">
    <div class="container-fluid">
        <div class="">
            <!-- slide Show -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="images/images2.jpg" alt=""/>
                        </a>                       
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="images/images2.jpg" alt=""/>
                        </a>                            
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <img src="images/images3.jpg" alt=""/>
                        </a>                              
                    </div>
                </div>
                <div class="swiper-button-next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></div>
                <div class="swiper-button-prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></div>

                <div class="main-text hidden-xs">
                    <div class="text-center">
                        <h1>
                            We Held You Find </h1>
                        <h3>Aparment That Best Fit You  </h3>
                        <a class="login btn  btn-sm " href="#">Contact Us Now</a>
                        <a class="btn btn-sm "href="#">Search Our Site</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- Heard -->
            <div class="hear">
                <nav class="navbar navbar-inverse" role="navigation">
                    <!--CONTAINER FLUID-->
                    <div class="container top-menu">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                        <!--COLLECT NAVBAR TOGGLING-->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Home</b><span class="dow"><i class="fa fa-angle-down"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><b> Home1</b></a></li>
                                        <li><a href="#"><b> Home2</b></a></li>
                                        <li><a href="#"><b> Home3</b></a></li>
                                        <li><a href="#"><b> Home4</b></a></li>
                                        <li><a href="#"><b> Home5</b></a></li>
                                    </ul>                                        
                                </li>                                    
                                <li><a href="#"><b>FAQ</b></a></li>
                                <li><a href="#"><b>ApartmentSearch</b></a></li>
                                <li><a href="#"><b>ContactUS</b></a></li>
                                <li><a href="#"><b>Rent Your Condo</b></a></li>
                                <li><a href="#"><b>Blog</b></a></li>
                            </ul>
                        </div>
                        <!--/END NAVBAR-COLLAPSE-->
                    </div>
                    <!--/END CONTAINER FLUID-->
                </nav>
            </div>
            <div class="clearfix"></div>
            <div class="mail">
                <a href="#">
                    <span><i class="fa fa-envelope"></i></span>ABC@gmail.com  
                </a>
                <a href="#"> 
                    <span><i class="fa fa-phone"></i></span>312-493-8446
                </a>
            </div>
            <div class="clearfix"></div>
            <!-- possion -->
            <div class=" container title">
                <h3>
                    Raw denim you probably haven't<b> heard of them jean shorts Austin</b>.  
                </h3>
                <p>
                    Nesciunt tofu stumptown aliqua, retro synth<b> master cleanse. 
                        Mustache cliche tempor, williamsburg </b>carles vegan helvetica.
                    Reprehenderit butcher <b>retro keffiyeh dreamcatcher synth. Cosby </b>sweater eu
                    banh mi, qui irure terr.
                </p>
            </div>
            <!-- slileShow col-md-3 -->
            <div class="sileshow">
                <div class="container module-slide">
                    <h4>Featured <b>Apartment</b></h4>
                    <div class="border-title"></div>

                    <div class="owl-carousel owl-theme" id="owl-carousel-4">
                        <div class="item">
                            <img src="images/slide1.jpeg" alt=""/>
                            <div class="star">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p> River North </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 right-star">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price">
                                <div class="col-md-6 col-sm-12 col-xs-12 price-1">
                                    <p> United States </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 price-2">
                                    <p> 1899 $ </p>
                                    <div class="triangle"></div>
                                    <div class="triangle-small"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slide2.jpg" alt=""/>
                            <div class="star">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p> River North </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 right-star">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price">
                                <div class="col-md-6 col-sm-12 col-xs-12 price-1">
                                    <p> United States </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 price-2">
                                    <p> 1899 $ </p>
                                    <div class="triangle"></div>
                                    <div class="triangle-small"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slide3.jpg" alt=""/>
                            <div class="star">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p> River North </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 right-star">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price">
                                <div class="col-md-6 col-sm-12 col-xs-12 price-1">
                                    <p> United States </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 price-2">
                                    <p> 1899 $ </p>
                                    <div class="triangle"></div>
                                    <div class="triangle-small"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slide4.jpg" alt=""/>
                            <div class="star">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p> River North </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 right-star">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price">
                                <div class="col-md-6 col-sm-12 col-xs-12 price-1">
                                    <p> United States </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 price-2">
                                    <p> 1899 $ </p>
                                    <div class="triangle"></div>
                                    <div class="triangle-small"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slide5.jpg" alt=""/>
                            <div class="star">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p> River North </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 right-star">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price">
                                <div class="col-md-6 col-sm-12 col-xs-12 price-1">
                                    <p> United States </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 price-2">
                                    <p> 1899 $ </p>
                                    <div class="triangle"></div>
                                    <div class="triangle-small"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/slide6.jpg" alt=""/>
                            <div class="star">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <p> River North </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 right-star">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price">
                                <div class="col-md-6 col-sm-12 col-xs-12 price-1">
                                    <p> United States </p>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 price-2">
                                    <p> 1899 $ </p>
                                    <div class="triangle"></div>
                                    <div class="triangle-small"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>                
                    </div>
                    <script>
                        $(document).ready(function () {
                            var owl = $('#owl-carousel-4');
                            owl.owlCarousel({
                                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                margin: 25,
                                nav: true,
                                loop: true,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    400: {
                                        items: 2
                                    },
                                    600: {
                                        items: 3
                                    },
                                    1000: {
                                        items: 4
                                    }
                                }
                            })
                        })
                    </script>
                </div>
            </div>


            <!-- Rent-our -->
            <div class="container">
                <div class="rent">
                    <h3>Rent Finders</h3>
                    <div class="col-md-6">
                        <div class="row">
                            <h2> SPECIALIZING IN ALL <b>60+ LUXURY HIGH-RISE</b></h2>
                            <P> Raw denim you probably haven't heard of them jean shorts Austin.
                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. 
                                Mustache cliche tempor, williamsburg carles vegan helvetica.
                                Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                                Cosby sweater eu banh mi, qui irure terr.</P>
                            <P>Raw denim you probably haven't heard of them jean shorts Austin.
                                Nesciunt tofu stumptown aliqua, retro synth master cleanse. </P>
                            <div class="row col-md-6">
                                <label><input class="check" type="checkbox" value=""> you could end up paying 20% </label>
                                <label><input class="check" type="checkbox" value=""> you could end up </label>
                            </div>

                            <div class="row col-md-6">
                                <label><input class="check" type="checkbox" value=""> you could end up </label>
                                <label><input class="check" type="checkbox" value=""> you could end up </label>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="row video">
                            <video controls>
                                <source src="images/Nếu Ngày Ấy - Khởi My ft Vy Dương [MV HD STAR OFFICIAL].mp4" type="video/mp4">
                                Your browser does not support the <code>video</code> tag.
                            </video>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="our">
                    <h3> Our Clients</h3>
                    <div class="tab">
                        <div class="logo-our">
                            <img src="images/logo.png" alt=""/>
                        </div>

                        <div class="logo-our">
                            <img src="images/logo.png" alt=""/>
                        </div>

                        <div class="logo-our">
                            <img src="images/logo.png" alt=""/>
                        </div>

                        <div class="logo-our">
                            <img src="images/logo.png" alt=""/>
                        </div>

                        <div class="logo-our">
                            <img src="images/logo.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact-Us -->

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-info">
                                <h5 class="footer-title">CONTACT US AT</h5>
                                <p> Via Ludovisi 39-45,Rome</p>
                                <p>Pho:12344567890</p>
                                <p>Email:<b>info@gmail.com</b></p>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-info">
                                <h5 class="footer-title">Links</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Service update</a></li>
                                    <li><a href="#">Held Desk</a></li>
                                    <li><a href="#">Apartment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-info">
                                <h5 class="footer-title">Vaviagtion:</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Service update</a></li>
                                    <li><a href="#">Held Desk</a></li>
                                    <li><a href="#">Apartment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-info">
                                <h5 class="footer-title">Featured Properties:</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Service update</a></li>
                                    <li><a href="#">Held Desk</a></li>
                                    <li><a href="#">Apartment</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-info">
                                <h5 class="footer-title">About Us:</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Service update</a></li>
                                    <li><a href="#">Held Desk</a></li>
                                    <li><a href="#">Apartment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 t-left tct">
                                <p>© 2014|your company.All rights reverved</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 t-right tct">
                                <ul class="list-unstyled list-inline">
                                    <li class="icon-ft"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="icon-ft"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="icon-ft"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="icon-ft"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>
</div>

</div>