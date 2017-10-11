<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SS Systems| Krish Tec </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link href="css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery-2.0.3.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="plugins/bootstrap-table/bootstrap-table.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="plugins/bootstrap-table/bootstrap-table.js"></script>
    <script src="plugins/bootstrap-table/extensions/export/bootstrap-table-export.js"></script>
    <script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
    <script src="plugins/bootstrap-table/extensions/select2-filter/bootstrap-table-select2-filter.js"></script>


    <!-- Latest compiled and minified Locales 
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>

    -->
       
</head>

<body class="nav-md">

    <div class="container body"><!-- container body -->
        <div class="main_container"><!-- main_container -->
            
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><img src="images/ss1.jpg" height="50" width="50"> <span>SS Systems</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->
                    <br />
           
                    <!-- sidebar menu -->
                    <?php include 'side_menu.php';?>
                    <!-- /sidebar menu -->
                </div>
            </div>
            
            <!-- top navigation -->
            <?php include 'top_nav.php';?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Data Logger       <small>All parameters</small></h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Filter By Date
                                    <small>
                                    <input type="text" id="min" name="min" placeholder="Start Date">
                                    <input type="text" id="max" name="max" placeholder="End Date">
                                    </small>
                                    </h2>
                                    
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Edit</a>
                                                </li>
                                                <li><a href="#">Update</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">
                                    <table id="searchResultsTbl" class="table table-striped" data-search="true" data-show-columns="true" data-show-export="true" data-pagination="true" data-id-field="id" data-click-to-select="true" data-toolbar="#toolbar" data-page-list="[10, 25, 50, 100, ALL]" data-unique-id="id">
                                        <thead>
                                            <tr>
                                                <th data-field="id" data-align="left" data-sortable="true">id</th>
                                                <th data-field="time" data-align="left">Time</th>
                                                <th data-field="solv" data-sortable="true">Solar Voltage</th>
                                                <th data-field="soli" data-align="left" data-sortable="true">Solar Current</th>
                                                <th data-field="batv">Battery Voltage</th>
                                                <th data-field="bati" data-align="left">Battery Current</th>
                                                <th data-field="temp" data-align="left">Temperature</th>
                                                <th data-field="trip" data-align="left">Trip</th>
                                                <th data-field="loadp" data-align="left">Load %</th>
                                                <th data-field="solp" data-align="left">Solar Power</th>
                                                <th data-field="solu" data-align="left">Solar Unit</th>
                                                <th data-field="solst" data-align="left">Solar Status</th>
                                                <th data-field="gridst" data-align="left">Grid Status</th>
                                                <th data-field="invst" data-align="left">Inverter Status</th>
                                                <th data-field="batst" data-align="left">Battery Status</th>
                                                <th data-field="invv" data-align="left">Inverter Voltage</th>
                                                <th data-field="opv" data-align="left">Output Voltage</th>
                                                <th data-field="gridv" data-align="left">Grid Voltage</th>
                                                <th data-field="ipf" data-align="left">Input Frequency</th>
                                                <th data-field="opf" data-align="left">Output Frequency</th>

                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>
                    <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">SS Systems! Solar MPPT Power Analysis! |
                            <span class="lead"> <i class="fa fa-sun-o"></i> Krish Tec!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
            <!-- /page content -->

        </div><!-- main_container -->

    </div><!-- container body -->

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>
        
<script type="text/javascript" language="javascript" class="init">
    $("data_pane").hide();
    
    function getData() {
        $.getJSON('dao/ser_processing.php', function(response) {
            console.log(response.data);
            $("#searchResultsTbl").bootstrapTable({
                data: response.data
            });
            $("data_pane").show();
        });        
    }

    getData();

</script>

</body>
</html>