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
        $less->compileFile('less/25-35.less', 'css/25-35.css');
        ?>
        <link href="css/25-35.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-element-4.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-35">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="row content4">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel4">
                                    <div class="x_title">
                                        <h2><i class="fa fa-align-left"></i> Collapsible / Accordion <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element4"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu">
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
                                    <div id="element4">
                                        <div class="accordion">
                                            <div class="panel">
                                                <a class="panel-heading" data-toggle="collapse" href="#collapseOne1">
                                                    <h4>Collapsible Group Items #1</h4>
                                                </a>
                                                <div id="collapseOne1" class="collapse in">
                                                    <div class="body">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>First Name</th>
                                                                    <th>Last Name</th>
                                                                    <th>User Name</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th>1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th >2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>3</th>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <a class="panel-heading" data-toggle="collapse" href="#collapseTwo1">
                                                    <h4>Collapsible Group Items #2</h4>
                                                </a>
                                                <div id="collapseTwo1" class=" collapse">
                                                    <div class="body">
                                                        <p><strong>Collapsible Item 2 data</strong>
                                                        </p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <a class="panel-heading "  data-toggle="collapse"href="#collapseThree1" >
                                                    <h4>Collapsible Group Items #3</h4>
                                                </a>
                                                <div id="collapseThree1" class=" collapse">
                                                    <div class="body">
                                                        <p><strong>Collapsible Item 3 data</strong>
                                                        </p>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                        Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
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
            </div>
        </div>
    </body>

</html>