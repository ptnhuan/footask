<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../../css/dashboard3/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <title>Module - Page content 2 dashboard3</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/dashboard3/11.less', '../../css/dashboard3/11.css');
        ?>
        <link href="../../css/dashboard3/11.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/dashboard3/11/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/jquery-ui.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/datetimepicker.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/canvasjs.min.js" type="text/javascript"></script>
        <script src="../../js/dashboard3/11/chart-rangetemprature.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-11">
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
                                <div id="chartRangeareaContainer"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>