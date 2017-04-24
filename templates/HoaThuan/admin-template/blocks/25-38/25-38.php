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
        $less->compileFile('less/25-38.less', 'css/25-38.css');
        ?>
        <link href="css/25-38.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-element-7.js" type="text/javascript"></script>
        <script src="js/tooltip.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-38">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content7">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
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

                    </div>

                </div>
            </div>


        </div>
    </body>

</html>