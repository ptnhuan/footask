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
        $less->compileFile('less/type-26.less', 'css/type-26.css');
        ?>
        <link rel="stylesheet" href="css/type-26.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-26">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Recent Activity</a></li>
                            <li><a data-toggle="tab" href="#menu1">Projects Worked on</a></li>
                            <li><a data-toggle="tab" href="#menu2">Profile</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <nav>
                                    <ul class="comments">
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
                                    </ul>
                                </nav>
                            </div>
                            <div id="menu1" class="tab-pane fade table-responsive">                                                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project Name</th>
                                            <th>Client Company</th>
                                            <th>Hours Spent</th>
                                            <th>Contribution</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>New Company Takeover Review</td>
                                            <td>Deveint Inc</td>
                                            <td>18</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 35%">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Partners and Inverstors report</td>
                                            <td>Deveint Inc</td>
                                            <td>30</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 55%">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>New Partner Contracts Consultanci</td>
                                            <td>Deveint Inc</td>
                                            <td>13</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 15%; background-color: #d9534f;">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>New Company Takeover Review</td>
                                            <td>Deveint Inc</td>
                                            <td>18</td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: 75%">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>