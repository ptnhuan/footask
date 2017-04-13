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
        $less->compileFile('less/25-27.less', 'css/25-27.css');
        ?>
        <link href="css/25-27.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/demo.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-27">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content4">
                            <div class="col-md-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Button App Design</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#button5"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link4"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="button5">
                                        <p>Add the class <code>.btn .btn-app</code> tag</p>
                                        <a class="btn btn-app">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a class="btn btn-app">
                                            <i class="fa fa-play"></i> Play
                                        </a>
                                        <a class="btn btn-app">
                                            <i class="fa fa-pause"></i> Pause
                                        </a>
                                        <a class="btn btn-app">
                                            <i class="fa fa-save"></i> Save
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-red">6</span>
                                            <i class="fa fa-bullhorn"></i> Notifications
                                        </a>
                                        <a class="btn btn-app">
                                            <i class="fa fa-repeat"></i> Repeat
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-green">211</span>
                                            <i class="fa fa-users"></i> Users
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-orange">32</span>
                                            <i class="fa fa-inbox"></i> Orders
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-orange">12</span>
                                            <i class="fa fa-envelope"></i> Inbox
                                        </a>
                                        <a class="btn btn-app">
                                            <span class="badge bg-blue">102</span>
                                            <i class="fa fa-heart-o"></i> Likes
                                        </a>
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