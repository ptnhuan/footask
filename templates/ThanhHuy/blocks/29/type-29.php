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
        $less->compileFile('less/type-29.less', 'css/type-29.css');
        ?>
        <link rel="stylesheet" href="css/type-29.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/collapse-close.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-29">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="content-left col-md-6 col-sm-6 col-xs-6">
                            <h3>Glyphicons Icons</h3>
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
                                    Glyphicons <small>different icon design elements</small>
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
                                <h2>Glyphicons</h2>

                                <h4>
                                    Available glyphs
                                </h4>

                                <p>Includes 260 glyphs in font format from the Glyphicon Halflings set. Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you include a link back to Glyphicons whenever possible.</p>
                                <div class="row">
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-asterisk"></i>
                                            <span>glyphicon glyphicon-asterisk</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-plus"></i>
                                            <span>glyphicon glyphicon-plus</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-euro"></i>
                                            <span>glyphicon glyphicon-euro</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-glass"></i>
                                            <span>glyphicon glyphicon-glass</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-minus"></i>
                                            <span>glyphicon glyphicon-minus</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-cloud"></i>
                                            <span>glyphicon glyphicon-cloud</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-envelope"></i>
                                            <span>glyphicon glyphicon-envelope</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                            <span>glyphicon glyphicon-pencil</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-music"></i>
                                            <span>glyphicon glyphicon-music</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-search"></i>
                                            <span>glyphicon glyphicon-search</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-heart"></i>
                                            <span>glyphicon glyphicon-heart</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-star"></i>
                                            <span>glyphicon glyphicon-star</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-user"></i>
                                            <span>glyphicon glyphicon-user</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-film"></i>
                                            <span>glyphicon glyphicon-film</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-th-large"></i>
                                            <span>glyphicon glyphicon-th-large</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-th"></i>
                                            <span>glyphicon glyphicon-th</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-th-list"></i>
                                            <span>glyphicon glyphicon-th-list</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-ok"></i>
                                            <span>glyphicon glyphicon-ok</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-remove"></i>
                                            <span>glyphicon glyphicon-remove</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-zoom-in"></i>
                                            <span>glyphicon glyphicon-zoom-in</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-zoom-out"></i>
                                            <span>glyphicon glyphicon-zoom-out</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-off"></i>
                                            <span>glyphicon glyphicon-off</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-signal"></i>
                                            <span>glyphicon glyphicon-signal</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-cog"></i>
                                            <span>glyphicon glyphicon-cog</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-trash"></i>
                                            <span>glyphicon glyphicon-trash</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-home"></i>
                                            <span>glyphicon glyphicon-home</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-file"></i>
                                            <span>glyphicon glyphicon-file</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-time"></i>
                                            <span>glyphicon glyphicon-time</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-road"></i>
                                            <span>glyphicon glyphicon-road</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-download"></i>
                                            <span>glyphicon glyphicon-download</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-upload"></i>
                                            <span>glyphicon glyphicon-upload</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-inbox"></i>
                                            <span>glyphicon glyphicon-inbox</span>
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