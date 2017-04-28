<html>
    <head>
        <meta charset="UTF-8">
        <meta name=”viewport” content=”width=device-width, initial-scale=1″>
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/48.less', 'css/48.css');
        ?>
        <link href="css/48.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>
    <body>
        <div class="type-48">
            <div class="container-fluid">
                <div class="maps">
                    <div class=" col-md-4">
                        <div class="search">
                            <div class="col-md-6 left">
                                <h5><b> SEARCH</b></h5>
                                <p><b>Property Type</b></p>
                                <select id="heard" class="form-control" required="">
                                    <option value="">all</option>
                                    <option value="press">Press</option>
                                    <option value="net">Internet</option>
                                    <option value="mouth">Word of mouth</option>
                                </select>
                                <p class="location"><b>Location</b></p>
                                <input type="text" class="form-control" id="inputSuccess3" placeholder="Enter location">
                            </div>
                            <div class="col-md-6 bedrooms">
                                <p>Advanced Search <span>+</span></p>
                                <div class="row">
                                    <div class=" col-md-6">
                                        <p><b> Bedrooms</b></p>
                                        <div id="input_div">
                                            <a type="button" value="-" id="moins" onclick="minus()">-</a>
                                            <input type="text" size="25" value="1" id="count">
                                            <a type="button" value="+" id="plus" onclick="plus()">+</a>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 ">
                                        <p><b> Bedrooms</b></p>
                                        <div id="input_div">
                                            <a type="button" value="-" id="moins" onclick="minus()">-</a>
                                            <input type="text" size="25" value="1" id="count">
                                            <a type="button" value="+" id="plus" onclick="plus()">+</a>
                                        </div>
                                    </div> 
                                </div>

                                <div class="clearfix"></div>
                                <p class="price"><b>Price</b></p>
                                <div data-role="main" class="ui-content">
                                    <form method="post" action="#">
                                        <div data-role="rangeslider">

                                            <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">

                                        </div>
                                    </form>
                                </div>
                            </div> 
                            <div class="clearfix"></div>
                        </div>
                        <div class="image">
                            <div class="col-md-6 ">
                                <h5><b>Results</b></h5>
                                <div class="item">
                                    <img src="images/slide1.jpeg" alt=""/>
                                    <h6><b>3295 valley Street</b></h6>
                                    <p>canthe</p>
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <h5><b>Display</b></h5>
                                <div class="item">
                                    <img src="images/slide1.jpeg" alt=""/>
                                    <h6><b>3295 valley Street</b></h6>
                                    <p>canthe</p>
                                </div>  
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.181096501834!2d106.76544701435141!3d10.873826692255493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d87f9e9d6161%3A0x81470278feb03ada!2zxJDGsOG7nW5nIHPhu5EgMTcsIExpbmggWHXDom4sIFRo4bunIMSQ4bupYywgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1493349770337" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="clearfix"></div>
                    <div class="container">
                        <div class=" col-md-12 why-us">
                            <h5><b>Why US?</b></h5>
                            <div class="col-md-4">
                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"> <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9">
                                    <h3><b> Lorem Ipsum dolor</b></h3>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. 
                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"> <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9">
                                    <h3><b> Lorem Ipsum dolor</b></h3>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. 
                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" row col-md-3 col-sm-6 col-xs-12">
                                    <a href="#"> <i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9">
                                    <h3><b> Lorem Ipsum dolor</b></h3>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. 
                                        Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="futer">
                    <div class="container">
                        <div class="featured">
                            <h5><b>Featured</b></h5>
                            <div class="row">
                                <div class=" col-md-3 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <img src="images/slide1.jpeg" alt=""/>
                                        <div class="posion">
                                            <div class="like">
                                                <a href="#"><i class="fa fa-hand-o-right" aria-hidden="true"></i></a>  
                                            </div>
                                            <!--                                    <div class="text-icon">
                                                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i>2</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>2</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>24cm</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>1</a>
                                                                                </div>-->


                                        </div>
                                        <div class="text">
                                            <h6> River North </h6>
                                            <p> United States </p>
                                            <button type="button" class="btn btn-success">$42000</button><br>
                                            <div class="icon">
                                                <a href="#"> <i class="fa fa-star" aria-hidden="true"></i>probably</a>
                                            </div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <img src="images/slide1.jpeg" alt=""/>
                                        <div class="posion">
                                            <div class="like">
                                                <a href="#"><i class="fa fa-hand-o-right" aria-hidden="true"></i></a>  
                                            </div>
                                            <!--                                    <div class="text-icon">
                                                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i>2</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>2</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>24cm</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>1</a>
                                                                                </div>-->


                                        </div>
                                        <div class="text">
                                            <h6> River North </h6>
                                            <p> United States </p>
                                            <button type="button" class="btn btn-success">$42000</button><br>
                                            <div class="icon">
                                                <a href="#"> <i class="fa fa-star" aria-hidden="true"></i>probably</a>
                                            </div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <img src="images/slide1.jpeg" alt=""/>
                                        <div class="posion">
                                            <div class="like">
                                                <a href="#"><i class="fa fa-hand-o-right" aria-hidden="true"></i></a>  
                                            </div>
                                            <!--                                    <div class="text-icon">
                                                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i>2</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>2</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>24cm</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>1</a>
                                                                                </div>-->


                                        </div>
                                        <div class="text">
                                            <h6> River North </h6>
                                            <p> United States </p>
                                            <button type="button" class="btn btn-success">$42000</button><br>
                                            <div class="icon">
                                                <a href="#"> <i class="fa fa-star" aria-hidden="true"></i>probably</a>
                                            </div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <img src="images/slide1.jpeg" alt=""/>
                                        <div class="posion">
                                            <div class="like">
                                                <a href="#"><i class="fa fa-hand-o-right" aria-hidden="true"></i></a>  
                                            </div>
                                            <!--                                    <div class="text-icon">
                                                                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i>2</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>2</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>24cm</a>
                                                                                    <a><i class="fa fa-star" aria-hidden="true"></i>1</a>
                                                                                </div>-->


                                        </div>
                                        <div class="text">
                                            <h6> River North </h6>
                                            <p> United States </p>
                                            <button type="button" class="btn btn-success">$42000</button><br>
                                            <div class="icon">
                                                <a href="#"> <i class="fa fa-star" aria-hidden="true"></i>probably</a>
                                            </div>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> 
                </div>

                <div class="clearfix"></div>
                <div class="recent-2">
                    <div class="container">
                        <div class="recent">
                            <h5><b>Recent</b></h5>
                            <div class="row">
                                <div class=" col-md-6">
                                    <div class="recent-1">
                                        <div class=" row col-md-6 ">
                                            <img src="images/slide1.jpeg" alt=""/>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text">
                                                <h6> River North </h6>
                                                <p> United States </p>
                                                <button type="button" class="btn btn-success">$42000</button><br>
                                                <div class="icon-star">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <a href="#" class="icon"> <i class="fa fa-star" aria-hidden="true"></i>probably</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="recent-1">
                                        <div class=" row col-md-6 ">
                                            <img src="images/slide1.jpeg" alt=""/>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text">
                                                <h6> River North </h6>
                                                <p> United States </p>
                                                <button type="button" class="btn btn-success">$42000</button><br>
                                                <div class="icon-star">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <a href="#" class="icon"> <i class="fa fa-star" aria-hidden="true"></i>probably</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="recent-1">
                                        <div class=" row col-md-6 ">
                                            <img src="images/slide1.jpeg" alt=""/>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text">
                                                <h6> River North </h6>
                                                <p> United States </p>
                                                <button type="button" class="btn btn-success">$42000</button><br>
                                                <div class="icon-star">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <a href="#" class="icon"> <i class="fa fa-star" aria-hidden="true"></i>probably</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="recent-1">
                                        <div class=" row col-md-6 ">
                                            <img src="images/slide1.jpeg" alt=""/>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text">
                                                <h6> River North </h6>
                                                <p> United States </p>
                                                <button type="button" class="btn btn-success">$42000</button><br>
                                                <div class="icon-star">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    <a href="#" class="icon"> <i class="fa fa-star" aria-hidden="true"></i>probably</a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="submit">
                    <div class="submit-1">
                        <h3> Raw denim you  them jean shorts Austin. </h3>
                        <p> Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan  </p>
                        <button type="button" class="btn btn-success">Submit</button><br>                      
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="team">
                    <div class="container">
                        <div class="the-team">

                            <h5><b> The Team</b></h5>
                            <div class="row">
                                <div  class="col-md-3 col-sm-6 col-xs-12">
                                    <img src="images/2.jpg" alt=""/>
                                    <h3> Jane Daubert</h3>
                                    <p>company ceo</p>
                                    <div class="icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>

                                </div>
                                <div  class="col-md-3 col-sm-6 col-xs-12">
                                    <img src="images/2.jpg" alt=""/>
                                    <h3> Jane Daubert</h3>
                                    <p>company ceo</p>
                                    <div class="icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>

                                </div>
                                <div  class="col-md-3 col-sm-6 col-xs-12">
                                    <img src="images/2.jpg" alt=""/>
                                    <h3> Jane Daubert</h3>
                                    <p>company ceo</p>
                                    <div class="icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>

                                </div>
                                <div  class="col-md-3 col-sm-6 col-xs-12">
                                    <img src="images/2.jpg" alt=""/>
                                    <h3> Jane Daubert</h3>
                                    <p>company ceo</p>
                                    <div class="icon">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="partners">
                            <h5> <b>partners</b></h5>
                            <div class="tab">
                                <div class="logo-our">
                                    <img src="images/logo-2.png" alt=""/>
                                </div>

                                <div class="logo-our">
                                    <img src="images/logo-2.png" alt=""/>
                                </div>

                                <div class="logo-our">
                                    <img src="images/logo-2.png" alt=""/>
                                </div>

                                <div class="logo-our">
                                    <img src="images/logo-2.png" alt=""/>
                                </div>

                                <div class="logo-our">
                                    <img src="images/logo-2.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                <div class="footer">
                    <div class="container">
                        <div class="col-md-4">
                            <div class="item">
                                <h5><b> New Items</b></h5>
                                <p><b>cash cow  restaurant</b></p>
                                <p>63 bush strat</p>
                                <div class="row col-md-6">
                                    <img src="images/slide3.jpg" alt=""/>
                                </div>
                                <div class="col-md-6">
                                    <a href="#"><i class="fa fa-binoculars" aria-hidden="true"></i> binoculars</a><br>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="item">
                                <p><b>cash cow  restaurant</b></p>
                                <p>63 bush strat</p>
                                <div class="row col-md-6">
                                    <img src="images/slide3.jpg" alt=""/>
                                </div>
                                <div class="col-md-6">
                                    <a href="#"><i class="fa fa-binoculars" aria-hidden="true"></i> binoculars</a><br>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <h5><b> Recent Review</b></h5>
                                <p><b>cash cow  restaurant</b></p>
                                <p>63 bush strat</p>
                                <div class="row col-md-6">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-6">
                                    <a href="#"><i class="fa fa-binoculars" aria-hidden="true"></i> binoculars</a><br>
                                </div>
                                <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                                    Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="item">
                                <p><b>cash cow  restaurant</b></p>
                                <p>63 bush strat</p>
                                <div class="row col-md-6">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-6">
                                    <a href="#"><i class="fa fa-binoculars" aria-hidden="true"></i> binoculars</a><br>
                                </div>
                                <p>Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                                    Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher</p>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="item">
                                <h5><b> About Us</b></h5>
                                <p>Max Five Lounge</p>
                                <p>63 bush strat</p>                              
                                <p>Nesciunt tofu stumptown</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="item">
                                <a class="about" href="#"><i class="fa fa-user" aria-hidden="true"></i>+8409234567 </a>
                                <br>
                                <a class="about" href="#"><i class="fa fa-user" aria-hidden="true"></i>123456789 </a>
                                <br>
                                <a class="web" href="#"><i class="fa fa-user" aria-hidden="true"></i>thegioi.com </a>
                                <br>
                                <div class="icon">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </div>
                                <button type="button" class="btn btn-default">contact us</button>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="footer-name">
                    <div class="container">
                        <p>@2014 Web design by By</p>
                    </div>
                </div>
            </div>

        </div>
    </body>
    <!--------------------plus-minus---------------->
    <script >
        var count = 1;
        var countEl = document.getElementById("count");
        function plus() {
            count++;
            countEl.value = count;
        }
        function minus() {
            if (count > 1) {
                count--;
                countEl.value = count;
            }
        }
    </script>
    <!--------------------End-plus-minus---------------->

</html>

