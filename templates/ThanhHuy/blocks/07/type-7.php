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
        $less->compileFile('less/type-7.less', 'css/type-7.css');
        ?>
        <link rel="stylesheet" href="css/type-7.css">
    </head>

    <body>
        <div class="type-7">
            <div class="container">
                <footer>
                    Gentelella - Bootstrap Admin Template by
                    <a href="#"> Colorlib</a>
                </footer>
            </div>
        </div>
    </body>
</html>