<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Module - Login</title>

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
        <script src="js/collapse-close.js" type="text/javascript"></script>
        <script src="js/pagination-table.js" type="text/javascript"></script>
        <script src="js/search-table.js" type="text/javascript"></script>
        <script src="js/check-all.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-15">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h3>
                                    Plus Table Design
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
                                                <div class="col-md-6 col-sm-6 col-xs-6">
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
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <span class="search-query">
                                                        Search: <input type="search" id="input" onkeyup="searchDataTable();" class="form-control form-search" placeholder="Search for name..." title="Type in a name">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="data-table table table-bordered" id="table">
                                                <thead>
                                                    <tr role="row" class="">
                                                        <th style="width: 6px;">
                                                        </th>
                                                        <th style="width: 34px;">
                                                            <input type="checkbox" class="item" onclick="checkAll('item', this)">
                                                        </th>
                                                        <th onclick="sortTable(1)" style="width: 141px;">Name</th>
                                                        <th onclick="sortTable(2)" style="width: 233px;">Position</th>
                                                        <th onclick="sortTable(3)" style="width: 103px;">Office</th>
                                                        <th onclick="sortTable(4)" style="width: 50px;">Age</th>
                                                        <th onclick="sortTable(5)" style="width: 99px;">Start date</th>
                                                        <th onclick="sortTable(6)" style="width: 76px;">Salary</th></tr>
                                                </thead>
                                                <tbody id="myDataTable">
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>

                                                    </tr>
                                                    <tr >
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>

                                                    </tr>
                                                    <tr >
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>

                                                    </tr>
                                                    <tr >
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>

                                                    </tr>
                                                    <tr >
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Garrett Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>63</td>
                                                        <td>2011/07/25</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                        <th>
                                                            <input type="checkbox" class="item">
                                                        </th>

                                                        <td>Ashton Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>66</td>
                                                        <td>2009/01/12</td>
                                                        <td>$86,000</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <p>Showing 1 to 5 of 12 entries</p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
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