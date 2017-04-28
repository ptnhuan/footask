<html>
    <head>
        <meta charset="UTF-8">
        <meta name=”viewport” content=”width=device-width, initial-scale=1″>
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4.less', 'css/4.css');
        ?>
        <link href="css/4.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>
    <body>
        <?php include './4_content.php'; ?>
    </body>
    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script src="js/4.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    
</html>