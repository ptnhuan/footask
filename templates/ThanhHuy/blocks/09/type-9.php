<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Content e-commerce</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-9.less', 'css/type-9.css');
        ?>
        <link rel="stylesheet" href="css/type-9.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/datetimepicker.js" type="text/javascript"></script>
        <script src="js/canvasjs.min.js" type="text/javascript"></script>
        <script src="js/chart2.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-9">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>
                                            Network Activities 
                                            <small>Graph title sub-title</small>
                                        </h2>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="show-calendar">
                                            <i class="fa fa-calendar"></i> <input type="text" id="datepicker" placeholder="Click view date">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <div id="chartContainer5"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>