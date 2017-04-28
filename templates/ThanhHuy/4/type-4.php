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
        $less->compileFile('less/type-4.less', 'css/type-4.css');
        ?>
        <link rel="stylesheet" href="css/type-4.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/rangeslider.js" type="text/javascript"></script>
        <script src="js/hover-menu.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-4">
            <?php include './4-header.php'; ?>
            <?php include './4-banner.php'; ?>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <?php include './4-content-left.php'; ?>
                        <?php include './4-content-right.php'; ?>
                    </div>
                </div>
            </div>            
            <?php include './4-footer.php'; ?>
        </div>        
    </body>
</html>