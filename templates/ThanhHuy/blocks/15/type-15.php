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
        $less->compileFile('less/type-15.less', 'css/type-15.css');
        ?>
        <link rel="stylesheet" href="css/type-15.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/canvasjs.min.js" type="text/javascript"></script>
        <script src="js/chart-dynamic.js" type="text/javascript"></script>
        <script src="js/collapse-close.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-15">
            <div class="container">
                <div class="content">
                    <div class="content-left">
                        <h3>Project Detail <small>design</small></h3>
                    </div>
                    <div class="content-right">
                        <div class="input-search">
                            <form method="get" action="#">
                                <input type="text" class="form-search" placeholder="Search for...">

                            </form>
                            <span class="input-btn-search">
                                <button class="btn-search" type="button">Go!</button>
                            </span>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h3>
                                    New Partner Contracts Consultancy
                                </h3>
                                <ul class="items">
                                    <li>
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Settings 1</a></li>
                                            <li><a href="#">Settings 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="close-link">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <div class="row">
                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                        <ul class="detail-overview">
                                            <li>
                                                <p>
                                                    Estimated budget <br><b>2300</b>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Total amount spent <br><b>2000</b>
                                                </p>
                                            </li>
                                            <li class="border-none">
                                                <p>
                                                    Estimated project duration <br><b>20</b>
                                                </p>
                                            </li>
                                        </ul><br><br>
                                        <div id="chartDynamicContainer"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                        <h4 class="title-des">Project Description</h4>
                                        <div class="project-description">
                                            <h3><i class="fa fa-paint-brush"> Gentelella</i></h3>
                                            <p>
                                                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.
                                            </p>
                                            <div class="location-company">
                                                <b>Client Company</b>Deveint Inc
                                                <b>Project Leader</b>Tony Chicken
                                            </div>
                                            <div class="project-files">
                                                <b>Project files</b>
                                                <br>
                                                <a href="#" class="files"><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                                                <a href="#" class="files"><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                                                <a href="#" class="files"><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                                                <a href="#" class="files"><i class="fa fa-picture-o"></i> Logo.png</a>
                                                <a href="#" class="files"><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                                            </div>     
                                            <div class="button-function">
                                                <a href="#" class="btn-add">Add files</a>
                                                <a href="#" class="btn-report">Report contact</a>
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