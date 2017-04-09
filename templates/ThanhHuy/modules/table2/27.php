<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Page content 7 table2 </title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/table2/27.less', '../../css/table2/27.css');
        ?>
        <link rel="stylesheet" href="../../css/table2/27.css">
        <script src="../../js/table2/27/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/table2/27/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/table2/27/pagination-table.js" type="text/javascript"></script>
        <script src="../../js/table2/27/search-table.js" type="text/javascript"></script>
        <script src="../../js/table2/27/close-panel.js" type="text/javascript"></script>
        <script src="../../js/table2/27/collapse-panel.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-27">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h3>
                                    Responsive example 
                                    <small>Users</small>
                                </h3>
                                <ul class="items">
                                    <li>
                                        <a class="toggled" id="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" data-toggle="dropdown">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Settings 1</a></li>
                                            <li><a href="#">Settings 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="toggled" id="close-link">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <p>Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.</p>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="show-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="data">
                                                        Show 
                                                        <select class="form-control form-select">
                                                            <option value="5">5</option>
                                                            <option value="5">10</option>
                                                            <option value="5">15</option>
                                                            <option value="5">20</option>
                                                        </select>
                                                        entries 
                                                    </span>
                                                </div>
                                                <div class="col-md-6">
                                                    <span class="search-query">
                                                        Search: <input type="search" id="input" onkeyup="searchDataTable();" class="form-control form-search" placeholder="Search for name..." title="Type in a name">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="data-table table table-bordered" id="table">
                                            <thead>
                                                <tr>
                                                    <th onclick="sortTable(0)" style="width: 71px;">First name</th>
                                                    <th onclick="sortTable(1)" style="width: 69px;">Last Name</th>
                                                    <th onclick="sortTable(2)" style="width: 155px;">Position</th>
                                                    <th onclick="sortTable(3)" style="width: 118px;">Office</th>
                                                    <th onclick="sortTable(4)" style="width: 67px;">Age</th>
                                                    <th onclick="sortTable(5)" style="width: 87px;">Start date</th>
                                                    <th onclick="sortTable(6)" style="width: 64px;">Salary</th>
                                                    <th onclick="sortTable(7)" style="width: 46px;">Extn.</th>
                                                    <th onclick="sortTable(8)" style="width: 148px;">Email</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myDataTable">
                                                <tr>
                                                    <td>Cara</td>
                                                    <td>Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                    <td>3990</td>
                                                    <td>c.stevens@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione</td>
                                                    <td>Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                    <td>1016</td>
                                                    <td>h.butler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>   
                                                <tr>
                                                    <td>Lael</td>
                                                    <td>Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                    <td>6733</td>
                                                    <td>l.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas</td>
                                                    <td>Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                    <td>8196</td>
                                                    <td>j.alexander@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad</td>
                                                    <td>Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                    <td>6373</td>
                                                    <td>s.decker@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael</td>
                                                    <td>Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                    <td>5384</td>
                                                    <td>m.bruce@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna</td>
                                                    <td>Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                    <td>4226</td>
                                                    <td>d.snider@datatables.net</td>
                                                </tr>   
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>Showing 1 to 5 of 12 entries</p>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="pagination page" id="myPager">
                                                </ul>
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