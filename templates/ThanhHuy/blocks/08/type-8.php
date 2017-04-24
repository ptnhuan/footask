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

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-8.less', 'css/type-8.css');
        ?>
        <link rel="stylesheet" href="css/type-8.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/canvasjs.min.js" type="text/javascript"></script>
        <script src="js/chart1.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <div id="chartContainer1"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <div id="chartContainer2"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <div id="chartContainer3"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <div id="chartContainer4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>