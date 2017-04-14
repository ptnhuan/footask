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
        $less->compileFile('less/25-44.less', 'css/25-44.css');
        ?>
        <link href="css/25-44.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-element-13.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-44">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content13">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel13">
                                    <div class="x_title">
                                        <h2>Pop Overs <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element13"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link13"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element13">
                                        <div class="alert alert-success ">
                                            <button type="button" class="close" data-dismiss="alert" ><span aria-hidden="true">×</span></button>
                                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                                        </div>
                                        <div class="alert alert-info">
                                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                                        </div>
                                        <div class="alert alert-warning">
                                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                                        </div>
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" ><span aria-hidden="true">×</span></button>
                                            <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
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