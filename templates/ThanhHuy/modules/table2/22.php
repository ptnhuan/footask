<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Page content 1 table2</title>

        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('../../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('../../less/table2/22.less', '../../css/table2/22.css');
        ?>
        <link rel="stylesheet" href="../../css/table2/22.css">
        <script src="../../js/table2/22/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="../../js/table2/22/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../js/table2/22/search-table.js" type="text/javascript"></script>
        <script src="../../js/table2/22/pagination-table.js" type="text/javascript"></script>
        <script src="../../js/table2/22/collapse-close.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-22">
            <div class="container">
                <div class="content">
                    <div class="content-left"> 
                        <h3>Users <small>Some examples to get you started</small></h3>
                    </div>
                    <div class="content-right">
                        <div class="input-search">
                            <input type="text" class="form-search" placeholder="Search for...">
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
                                    Default Example  
                                    <small>Users</small>
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
                                <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code></p>

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
                                                    <th onclick="sortTable(0)">Name</th>
                                                    <th onclick="sortTable(1)">Position</th>
                                                    <th onclick="sortTable(2)">Office</th>
                                                    <th onclick="sortTable(3)">Age</th>
                                                    <th onclick="sortTable(4)">Start date</th>
                                                    <th onclick="sortTable(5)">Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myDataTable">
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr >
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr >
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr >
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr >
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
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
