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
        $less->compileFile('less/25-32.less', 'css/25-32.css');
        ?>
        <link href="css/25-32.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-element-1.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-32">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-6">

                        </div>
                        <div class="row content1">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel1">
                                    <div class="x_title">
                                        <h2><i class="fa fa-bars"></i> Tabs <small>Float right</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#element1"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-wrench"></i></a>
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
                                    <div id="element1">
                                        <div class="">
                                            <ul class="nav nav-tabs bar_tabs right">
                                                <li class="active"><a href="#tab4" data-toggle="tab">Home</a></li>
                                                <li><a href="#tab5" data-toggle="tab" >Profile</a></li>
                                                <li><a href="#tab6" data-toggle="tab" >Profile</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane  active in" id="tab4">
                                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                                                        synth. Cosby sweater eu banh mi, qui irure terr.</p>
                                                </div>
                                                <div class="tab-pane" id="tab5">
                                                    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                        booth letterpress, commodo enim craft beer mlkshk aliquip</p>
                                                </div>
                                                <div class="tab-pane" id="tab6">
                                                    <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                        booth letterpress, commodo enim craft beer mlkshk </p>
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