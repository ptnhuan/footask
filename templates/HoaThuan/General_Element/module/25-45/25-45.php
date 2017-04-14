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
        $less->compileFile('less/25-45.less', 'css/25-45.css');
        ?>
        <link href="css/25-45.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-element-14.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-45">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-6"></div>
                        <div class="row content14">

                            <div class="col-md-6 col-md-6 col-xs-12">
                                <div class="x_panel14">
                                    <div class="x_title">
                                        <h2><i class="fa fa-align-left"></i> Progress bar<small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element14"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link14"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element14">
                                        <p>Bootstrap progress bar with animated loading bar, add right to .progress to align right</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="progress right">
                                                    <div class="progress-bar progress-bar-danger"style="width: 25%;"></div>
                                                </div>
                                                <div class="progress right">
                                                    <div class="progress-bar progress-bar-warning"style="width: 45%;"></div>
                                                </div>
                                                <div class="progress right">
                                                    <div class="progress-bar progress-bar-info"style="width: 65%;"></div>
                                                </div>
                                                <div class="progress right">
                                                    <div class="progress-bar progress-bar-success"style="width: 95%;"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-danger"style="width: 25%;"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning"style="width: 45%;"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info"style="width: 65%;"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" style="width: 95%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <ul class="verticle_bars list-inline">
                                                    <li>
                                                        <div class="progress progress-striped vertical progress_wide bottom">
                                                            <div class="progress-bar progress-bar-danger" style="height: 25%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress progress-striped vertical progress_wide bottom">
                                                            <div class="progress-bar progress-bar-warning" style="height: 45%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide bottom">
                                                            <div class="progress-bar progress-bar-info"  style="height: 65%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide bottom">
                                                            <div class="progress-bar  progress-bar-success" style="height: 85%;"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <ul class="verticle_bars list-inline">
                                                    <li>
                                                        <div class="progress vertical bottom">
                                                            <div class="progress-bar  progress-bar-success"style="height: 85%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical bottom">
                                                            <div class="progress-bar progress-bar-info"style="height: 65%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical bottom">
                                                            <div class="progress-bar progress-bar-warning" style="height: 45%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical bottom">
                                                            <div class="progress-bar progress-bar-danger" style="height: 25%;"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <ul class="verticle_bars list-inline">
                                                    <li>
                                                        <div class="progress vertical progress_wide">
                                                            <div class="progress-bar progress-bar-danger progress-bar-striped" style="height: 25%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide">
                                                            <div class="progress-bar progress-bar-warning progress-bar-striped"style="height: 45%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide">
                                                            <div class="progress-bar progress-bar-info" style="height: 65%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical progress_wide">
                                                            <div class="progress-bar  progress-bar-success"style="height: 85%;"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-12 ">
                                                <ul class="verticle_bars list-inline">
                                                    <li>
                                                        <div class="progress vertical">
                                                            <div class="progress-bar  progress-bar-success"style="height: 85%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical">
                                                            <div class="progress-bar progress-bar-info"  style="height: 65%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical">
                                                            <div class="progress-bar progress-bar-warning"style="height: 45%;"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="progress vertical">
                                                            <div class="progress-bar progress-bar-danger" style="height: 25%;"></div>
                                                        </div>
                                                    </li>
                                                </ul>
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