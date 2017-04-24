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
        $less->compileFile('less/25-24.less', 'css/25-24.css');
        ?>
        <link href="css/25-24.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-button1.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-24">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content1">
                            <div class="col-md-6">
                                <div class="x_panel1">
                                    <div class="x_title">
                                        <h2>Rounded Button</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#button1"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link1"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="button1">
                                        <button type="button" class="btn btn-round btn-default">Default</button>
                                        <button type="button" class="btn btn-round btn-primary">Primary</button>
                                        <button type="button" class="btn btn-round btn-success">Success</button>
                                        <button type="button" class="btn btn-round btn-info">Info</button>
                                        <button type="button" class="btn btn-round btn-warning">Warning</button>
                                        <button type="button" class="btn btn-round btn-danger">Danger</button>
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