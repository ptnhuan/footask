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
        $less->compileFile('less/25-23.less', 'css/25-23.css');
        ?>
        <link href="css/25-23.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/demo.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-23">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content">
                            <div class="col-md-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Default Buttons </h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#button1"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="button1">
                                        <button type="button" class="btn btn-default">Default</button>

                                        <button type="button" class="btn btn-primary">Primary</button>

                                        <button type="button" class="btn btn-success">Success</button>

                                        <button type="button" class="btn btn-info">Info</button>

                                        <button type="button" class="btn btn-warning">Warning</button>

                                        <button type="button" class="btn btn-danger">Danger</button>

                                        <button type="button" class="btn btn-dark">Dark</button>

                                        <button type="button" class="btn btn-link">Link</button>
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