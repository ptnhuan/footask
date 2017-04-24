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
        $less->compileFile('less/25-43.less', 'css/25-43.css');
        ?>
        <link href="css/25-43.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/close-element-12.js" type="text/javascript"></script>
        <script src="js/onclick.js" type="text/javascript"></script>
        <script src="js/close-onclick.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="type-25-43">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-6"></div>
                        <div class="row content12">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel12">
                                    <div class="x_title">
                                        <h2><i class="fa fa-bell"></i> Notifications <small>Styled &amp; Custom notifications</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse"href="#element12"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a id="close-link12"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="element12">
                                        <p>Regular notifications</p> 
                                        <div class="onclick-button">
                                            <button class="btn btn-default" onclick="myFunction()"> Success</button>
                                            <button class="btn btn-default" onclick="myFunction1()"> Info</button>
                                            <button class="btn btn-default" onclick="myFunction2()"> Notice</button>
                                            <button class="btn btn-default" onclick="myFunction3()"> Error</button>
                                            <button class="btn btn-default" onclick="myFunction4()"> Dard</button>

                                            <div id="onclick">
                                                <div class="btn-button success">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Regular Success </span>
                                                    <a id="close-link-onclick">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> That thing that you were trying to do worked! </p>

                                                </div>

                                            </div> 
                                            <!------------------------------------------>

                                            <div id="onclick1">
                                                <div class="btn-button info">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> New Thing </span>
                                                    <a id="close-link-onclick1">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Just to let you know, something happened.</p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>                                       

                                            <div id="onclick2">
                                                <div class="btn-button notice">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Regular Notice </span>
                                                    <a id="close-link-onclick2">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Check me out! I'm a notice. </p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>

                                            <div id="onclick3">
                                                <div class=" btn-button error">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Oh No! </span>
                                                    <a id="close-link-onclick3">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Something terrible happened. </p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>

                                            <div id="onclick4">
                                                <div class="btn-button dark">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Oh No! </span>
                                                    <a id="close-link-onclick4">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Something terrible happened. </p>
                                                </div>
                                            </div>                        
                                        </div>
                                        <hr>
                                        <!------------------------------------------>
                                        <p>Sticky notifications.. these wont close unless user closes them.</p> 
                                        <div class="onclick-button">
                                            <button class="btn btn-default" onclick="myFunction5()"> Success</button>
                                            <button class="btn btn-default" onclick="myFunction6()"> Info</button>
                                            <button class="btn btn-default" onclick="myFunction7()">Warning</button>
                                            <button class="btn btn-default" onclick="myFunction8()"> Error</button>
                                            <button class="btn btn-default" onclick="myFunction9()"> Dard</button>
                                            <div id="onclick5">
                                                <div class="btn-button success">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Sticky Success </span>
                                                    <a id="close-link-onclick5">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky success... I'm not even gonna make a joke. </p>

                                                </div>

                                            </div> 
                                            <!------------------------------------------>
                                            <div id="onclick6">
                                                <div class="btn-button info">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Sticky Info </span>
                                                    <a id="close-link-onclick6">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky Info... I'm not even gonna make a joke.</p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>                                       
                                            <div id="onclick7">
                                                <div class="btn-button notice">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span>  Sticky Warning </span>
                                                    <a id="close-link-onclick7">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky Warning... I'm not even gonna make a joke. </p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>
                                            <div id="onclick8">
                                                <div class=" btn-button error">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Sticky Danger </span>
                                                    <a id="close-link-onclick8">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky Warning... I'm not even gonna make a joke. </p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>
                                            <div id="onclick9">
                                                <div class="btn-button dark">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Sticky Success </span>
                                                    <a id="close-link-onclick9">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> Sticky success... I'm not even gonna make a joke. </p>
                                                </div>
                                            </div>                        
                                        </div>
                                        <hr>
                                        <!------------------------------------------>
                                        <div class="onclick-button">
                                            <button class="btn btn-default" onclick="myFunction10()"> Non-Blocking Notice</button>
                                            <div id="onclick10">
                                                <div class="btn-button dark">
                                                    <i class="fa fa-check-circle-o"></i>
                                                    <span> Non-Blocking Notice </span>
                                                    <a id="close-link-onclick10">
                                                        <i class="fa fa-pause"></i>
                                                        <i class="fa fa-close"></i>
                                                    </a>
                                                    <p> When you hover over me I'll fade to show the elements underneath.
                                                        Feel free to click any of them just like I wasn't even here.</p>
                                                </div>
                                            </div> 
                                            <!------------------------------------------>                                                           
                                        </div>
                                        <hr>
                                        <!------------------------------------------>
                                        <div class="onclick-button">
                                            <button class="btn btn-default"> Success</button>   
                                            <button class="btn btn-default"> Info</button>  
                                            <button class="btn btn-default"> Waring</button>  
                                            <button class="btn btn-default"> Error</button> 
                                            <button class="btn btn-default"> Dark</button>  
                                            <!------------------------------------------>                                                           
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