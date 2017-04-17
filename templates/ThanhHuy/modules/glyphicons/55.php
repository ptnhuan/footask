<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content pricing table</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/glyphicons/55.less', '../../css/glyphicons/55.css');
        ?>
        <link rel="stylesheet" href="../../css/glyphicons/55.css">
        <script src="../../js/glyphicons/55/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/glyphicons/55/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/glyphicons/55/collapse-close.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-55">
            <div class="container">
                <div class="content">
                    <div class="content-left">
                        <h3>Glyphicons Icons</h3>
                    </div>
                    <div class="content-right">
                        <div class="input-search">
                            <form method="get" action="#">
                                <input type="text" class="form-search" placeholder="Search for...">

                            </form>
                            <span class="input-btn-search">
                                <button class="btn-search" type="button">Go!</button>
                            </span>
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
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-repeat"></i>
                                            <span>glyphicon glyphicon-repeat</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-refresh"></i>
                                            <span>glyphicon glyphicon-refresh</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-list-alt"></i>
                                            <span>glyphicon glyphicon-list-alt</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-flag"></i>
                                            <span>glyphicon glyphicon-flag</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-qrcode"></i>
                                            <span>glyphicon glyphicon-qrcode</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-barcode"></i>
                                            <span>glyphicon glyphicon-barcode</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-tag"></i>
                                            <span>glyphicon glyphicon-tag</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-tags"></i>
                                            <span>glyphicon glyphicon-tags</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-book"></i>
                                            <span>glyphicon glyphicon-book</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-print"></i>
                                            <span>glyphicon glyphicon-print</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-font"></i>
                                            <span>glyphicon glyphicon-font</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-bold"></i>
                                            <span>glyphicon glyphicon-bold</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-italic"></i>
                                            <span>glyphicon glyphicon-italic</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-align-left"></i>
                                            <span>glyphicon glyphicon-align-left</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-list"></i>
                                            <span>glyphicon glyphicon-list</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-picture"></i>
                                            <span>glyphicon glyphicon-picture</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-adjust"></i>
                                            <span>glyphicon glyphicon-adjust</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-tint"></i>
                                            <span>glyphicon glyphicon-tint</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-edit"></i>
                                            <span>glyphicon glyphicon-edit</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-share"></i>
                                            <span>glyphicon glyphicon-share</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-check"></i>
                                            <span>glyphicon glyphicon-check</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-move"></i>
                                            <span>glyphicon glyphicon-move</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-play"></i>
                                            <span>glyphicon glyphicon-play</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-pause"></i>
                                            <span>glyphicon glyphicon-pause</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-stop"></i>
                                            <span>glyphicon glyphicon-stop</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-forward"></i>
                                            <span>glyphicon glyphicon-forward</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-eject"></i>
                                            <span>glyphicon glyphicon-eject</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-plus-sign"></i>
                                            <span>glyphicon glyphicon-plus-sign</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-ok-sign"></i>
                                            <span>glyphicon glyphicon-ok-sign</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-info-sign"></i>
                                            <span>glyphicon glyphicon-info-sign</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-ok-circle"></i>
                                            <span>glyphicon glyphicon-ok-circle</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-ban-circle"></i>
                                            <span>glyphicon glyphicon-ban-circle</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-arrow-left"></i>
                                            <span>glyphicon glyphicon-arrow-left</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-arrow-up"></i>
                                            <span>glyphicon glyphicon-arrow-up</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-share-alt"></i>
                                            <span>glyphicon glyphicon-share-alt</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-gift"></i>
                                            <span>glyphicon glyphicon-gift</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-leaf"></i>
                                            <span>glyphicon glyphicon-leaf</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                            <span>glyphicon glyphicon-eye-open</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-eye-close"></i>
                                            <span>glyphicon glyphicon-eye-close</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-plane"></i>
                                            <span>glyphicon glyphicon-eye-plane</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-random"></i>
                                            <span>glyphicon glyphicon-random</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-comment"></i>
                                            <span>glyphicon glyphicon-comment</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-magnet"></i>
                                            <span>glyphicon glyphicon-maget</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-retweet"></i>
                                            <span>glyphicon glyphicon-retweet</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-hdd"></i>
                                            <span>glyphicon glyphicon-hdd</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-bullhorn"></i>
                                            <span>glyphicon glyphicon-bullhorn</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-certificate"></i>
                                            <span>glyphicon glyphicon-certificate</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-hand-left"></i>
                                            <span>glyphicon glyphicon-hand-left</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-hand-up"></i>
                                            <span>glyphicon glyphicon-hand-up</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-globe"></i>
                                            <span>glyphicon glyphicon-globe</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-tasks"></i>
                                            <span>glyphicon glyphicon-tasks</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-filter"></i>
                                            <span>glyphicon glyphicon-filter</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-fullscreen"></i>
                                            <span>glyphicon glyphicon-fullscreen</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-link"></i>
                                            <span>glyphicon glyphicon-link</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-phone"></i>
                                            <span>glyphicon glyphicon-phone</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-usd"></i>
                                            <span>glyphicon glyphicon-usd</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-gbp"></i>
                                            <span>glyphicon glyphicon-gbp</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-sort"></i>
                                            <span>glyphicon glyphicon-sort</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-expand"></i>
                                            <span>glyphicon glyphicon-expand</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-log-in"></i>
                                            <span>glyphicon glyphicon-log-in</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-flash"></i>
                                            <span>glyphicon glyphicon-flash</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-log-out"></i>
                                            <span>glyphicon glyphicon-log-out</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-record"></i>
                                            <span>glyphicon glyphicon-record</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-save"></i>
                                            <span>glyphicon glyphicon-save</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-open"></i>
                                            <span>glyphicon glyphicon-open</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-saved"></i>
                                            <span>glyphicon glyphicon-saved</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-import"></i>
                                            <span>glyphicon glyphicon-import</span>
                                        </div>
                                    </div>
                                    <div class="col-md-custom col-sm-3 col-xs-6">
                                        <div class="content-glyphicon">
                                            <i class="glyphicon glyphicon-export"></i>
                                            <span>glyphicon glyphicon-export</span>
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