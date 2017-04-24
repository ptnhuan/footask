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
        $less->compileFile('less/type-31.less', 'css/type-31.css');
        ?>
        <link rel="stylesheet" href="css/type-31.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/collapse-close.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-31">
            <div class="container">
                <div class="content">
                    <div class="content-left">
                        <h3>Invoice <small>Some examples to get you started</small></h3>
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
                                    Invoice Design <small>Sample user invoice design</small>
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
                                <h1 class="pull-left">
                                    <i class="fa fa-globe"></i> Invoice <h3 class="pull-right">Date: 18/04/2017</h3>
                                </h1>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        From<br><b>Iron Admin, Inc.</b><br>795 Freedom Ave, Suite 600 <br>New York, CA 94107 <br>Phone: 1 (804) 123-9876 <br>Email: ironadmin.com
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        To<br><b>John Doe </b><br>795 Freedom Ave, Suite 600 <br>New York, CA 94107 <br>Phone: 1 (804) 123-9876 <br>Email: ironadmin.com
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <b>Invoice #007612 </b><br><br><b>Oder ID: </b>4F3S8J<br> <b>Payment Due: </b>04/22/2017<br> <b>Account: </b>968-34567
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Product</th>
                                                <th>Serial #</th>
                                                <th style="width: 59%;">Description</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Call of Duty</td>
                                                <td>455-981-221</td>
                                                <td>455-El snort testosterone trophy driving gloves handsome gerry Richardson helvetica tousled street art master testosterone trophy driving gloves handsome gerry Richardson-221</td>
                                                <td>$64.50</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Need for Speed IV</td>
                                                <td>247-925-726</td>
                                                <td>Wes Anderson umami biodiesel</td>
                                                <td>$50.00</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Monsters DVD</td>
                                                <td>735-845-642</td>
                                                <td>Terry Richardson helvetica tousled street art master, El snort testosterone trophy driving gloves handsome letterpress erry Richardson helvetica tousled</td>
                                                <td>$10.70</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Grown Ups Blue Ray</td>
                                                <td>422-568-642</td>
                                                <td>Tousled lomo letterpress erry Richardson helvetica tousled street art master helvetica tousled street art master, El snort testosterone</td>
                                                <td>$25.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h4>Payment Methods:</h4>
                                        <a href="#"><img src="images/visa.png"></a>
                                        <a href="#"><img src="images/mastercard.png"></a>
                                        <a href="#"><img src="images/american-express.png"></a>
                                        <a href="#"><img src="images/paypal.png"></a>
                                        <div class="box-note">
                                            <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h4>Amount Due 04/22/2017</h4>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Subtotal:</td>
                                                    <td>$250.30</td>
                                                </tr>
                                                <tr>
                                                    <td>Tax (9.3%)</td>
                                                    <td>$10.34</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping:</td>
                                                    <td>$5.80</td>
                                                </tr>
                                                <tr>
                                                    <td>Total:</td>
                                                    <td>$265.24</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="pull-left">
                                            <a href="#" class="btn-print">
                                                <i class="fa fa-print"> Print</i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pull-right">
                                            <a href="#" class="btn-function btn-download-pdf">
                                                <i class="fa fa-download"> Generate PDF</i>
                                            </a>
                                            <a href="#" class="btn-function btn-submit-payment">
                                                <i class="fa fa-credit-card"> Submit Payment</i>
                                            </a>
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