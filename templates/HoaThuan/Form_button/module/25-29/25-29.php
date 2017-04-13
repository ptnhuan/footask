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
        $less->compileFile('less/25-29.less', 'css/25-29.css');
        ?>
        <link href="css/25-29.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/demo.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-29">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-6">
                        </div>
                        <div class="row content6">
                            <div class="col-md-6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Button Groups</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#button7"><i class="fa fa-chevron-up"></i></a>
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
                                            <li><a id="close-link6"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="button7">
                                        <div class="group">
                                            <div class="btn-group">
                                                <button class="btn btn-default" type="button">Left</button>
                                                <button class="btn btn-default" type="button">Middle</button>
                                                <button class="btn btn-default" type="button">Right</button>
                                            </div>
                                            <div class="btn-group  btn-group-sm">
                                                <button class="btn btn-default" type="button">Left</button>
                                                <button class="btn btn-default" type="button">Middle</button>
                                                <button class="btn btn-default" type="button">Right</button>
                                            </div>
                                        </div>
                                        <p class="text-muted">Vertical button groups</p>
                                        <div class="group">
                                            <div class="btn-group-vertical">
                                                <button class="btn btn-default" type="button">Top</button>
                                                <button class="btn btn-default" type="button">Middle</button>
                                                <button class="btn btn-default" type="button">Bottom</button>
                                            </div>
                                        </div>
                                        <p class="text-muted">Nested button groups</p>
                                        <div class="group">
                                            <div class="btn-group">
                                                <button class="btn btn-default" type="button">1</button>
                                                <button class="btn btn-danger" type="button">2</button>
                                                <button class="btn btn-default" type="button">3</button>
                                                <div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Dropdown <span class="caret"></span> </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown link 1</a>
                                                        </li>
                                                        <li><a href="#">Dropdown link 2</a>
                                                        </li>
                                                        <li><a href="#">Dropdown link 3</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-muted">Multiple button groups</p>
                                        <div class="group">
                                            <div class="btn-toolbar">
                                                <div class="btn-group">
                                                    <button class="btn btn-info" type="button">1</button>
                                                    <button class="btn btn-info active" type="button">2</button>
                                                    <button class="btn btn-info" type="button">3</button>
                                                    <button class="btn btn-info" type="button">4</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-success" type="button">5</button>
                                                    <button class="btn btn-success" type="button">6</button>
                                                    <button class="btn btn-success" type="button">7</button>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-warning" type="button">8</button>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="text-muted">Group Radio</p>
                                        <div class="group">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default">
                                                    <input type="radio" name="options"> Option 1
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="options"> Option 2
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="radio" name="options"> Option 3
                                                </label>
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