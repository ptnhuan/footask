<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/25-49.less', 'css/25-49.css');
        ?>
        <link href="css/25-49.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-media.js" type="text/javascript"></script>


    </head>
    <body>
        <div class="type-25-19">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row media-gallery">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Media Gallery <small class="gallery"> gallery design </small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#media"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="media">
                                        <p>Media gallery design emelents</p>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img  src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-content-5 col-xs-6">
                                            <div class="thumbnail">
                                                <div class="image view">
                                                    <img src="images/media.jpg" alt="image">
                                                    <div class="mask">
                                                        <p>Your Text</p>
                                                        <div class="tools">
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                                            <a href="#"><i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>Snow and Ice Incoming for the South</p>
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
        </div>
    </body>

</html>