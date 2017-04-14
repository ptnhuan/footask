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
        $less->compileFile('less/25-46.less', 'css/25-46.css');
        ?>
        <link href="css/25-46.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-element-15.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-46">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">                       
                        <div class="row content15">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel15">
                                    <div class="x_title">
                                        <h2>To Do List <small>Sample tasks</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element15"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link15"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element15">
                                        <ul class="to-do">
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Schedule meeting with new client </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Create email address for new intern</a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Have IT fix the network printer</a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Copy backups to offsite location</a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</a>
                                            </li>
                                            <li>
                                                <a>
                                                    <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</a>
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
    </body>

</html>