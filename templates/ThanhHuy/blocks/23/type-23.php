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
        $less->compileFile('less/type-23.less', 'css/type-23.css');
        ?>
        <link rel="stylesheet" href="css/type-23.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-23">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4>Recent Activity</h4>
                        <ul class="recent-activity">
                            <li>
                                <img src="images/img.jpg" alt="" class="img-user">
                                <div class="date-comment">
                                    <h3>24</h3>
                                    <p>May</p>
                                </div>
                                <div class="comment-content">
                                    <h4>Desmond Davison</h4>
                                    <p class="content">
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.
                                    </p><br>
                                    <a href="#" class="link-file">
                                        <i class="fa fa-paperclip"></i> User Acceptance Test.doc
                                    </a>
                                </div>
                            </li>
                            <li>
                                <img src="images/picture.jpg" alt="" class="img-user">
                                <div class="date-comment">
                                    <h3>21</h3>
                                    <p>May</p>
                                </div>
                                <div class="comment-content">
                                    <h4>Brian Michaels</h4>
                                    <p class="content">
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.
                                    </p><br>
                                    <a href="#" class="link-file">
                                        <i class="fa fa-paperclip"></i> Download
                                    </a>
                                </div>
                            </li>
                            <li>
                                <img src="images/img.jpg" alt="" class="img-user">
                                <div class="date-comment">
                                    <h3>24</h3>
                                    <p>May</p>
                                </div>
                                <div class="comment-content">
                                    <h4>Desmond Davison</h4>
                                    <p class="content">
                                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.
                                    </p><br>
                                    <a href="#" class="link-file">
                                        <i class="fa fa-paperclip"></i> User Acceptance Test.doc
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>