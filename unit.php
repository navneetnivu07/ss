<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SS Systems! | </title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="js/amcharts.js" type="text/javascript"></script>
    <script src="js/serial.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

    <?php 
    /* Open connection to "zing_db" MySQL database. */
    include 'connection.php';
    /* Fetch result set from t_test table */
    $data = mysqli_query($conn,"SELECT * FROM site_1max");
    ?>


    <script type="text/javascript">

    var myData=<?php 
    
    $result  = array();
    while ($row = mysqli_fetch_array($data))
    {

        array_push($result, array('munit' => $row[5],
                                  'date' => $row[1])
                                  ); 
    }

    echo json_encode($result); /* We use the concatenation operator '.' to add comma delimiters after each data value. */
    ?>;
   
        //alert(myData[0].date);
        //alert(myData[0].munit);
    
              //  alert(myData);

    </script>

    <script>

            var chartData = [];
            generateChartData();

            var chart = AmCharts.makeChart("chartdiv", 
            {
                type: "serial",
                dataProvider: chartData,
                categoryField: "date",
                categoryAxis: {
                    parseDates: true,
                    gridAlpha: 0.15,
                    minorGridEnabled: true,
                    axisColor: "#DADADA"
            },
                valueAxes: [{
                    axisAlpha: 0.2,
                    id: "v1"
                }],
                graphs: [{
                    title: "red line",
                    id: "g1",
                    valueAxis: "v1",
                    valueField: "visits",
                    bullet: "round",
                    bulletBorderColor: "#FFFFFF",
                    bulletBorderAlpha: 1,
                    lineThickness: 2,
                    lineColor: "#1ABB9C",
                    negativeLineColor: "#0352b5",
                    balloonText: "[[category]]<br><b><span style='font-size:14px;'>unit: [[value]]</span></b>"
                }],
                chartCursor: {
                    fullWidth:true,
                    cursorAlpha:0.1
                },
                chartScrollbar: {
                    scrollbarHeight: 40,
                    color: "#FFFFFF",
                    autoGridCount: true,
                    graph: "g1"
                },

                mouseWheelZoomEnabled:true
            });

            chart.addListener("dataUpdated", zoomChart);


            // generate some random data, quite different range

            function generateChartData() {
                var firstDate = new Date();
                firstDate.setDate(firstDate.getDate());
                

                for (var i = 0; i < myData.length; i++) {
                    // we create date objects here. In your data, you can have date strings
                    // and then set format of your dates using chart.dataDateFormat property,
                    // however when possible, use date objects, as this will speed up chart rendering.
                    var newDate = new Date(firstDate);
                    newDate.setDate(newDate.getDate() + i);

                    chartData.push({
                        date: newDate,
                        visits: myData[i].munit
                    });

                    $("#dt").html(myData[i].date);
                $("#su").html(myData[i].munit);

                }

            }

            // this method is called when chart is first inited as we listen for "dataUpdated" event
            function zoomChart() {
                // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
                chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
            }

            // changes cursor mode from pan to select
            function setPanSelect() {
                var chartCursor = chart.chartCursor;

                if (document.getElementById("rb1").checked) {
                    chartCursor.pan = false;
                    chartCursor.zoomable = true;

                } else {
                    chartCursor.pan = true;
                }
                chart.validateNow();
            }

        </script>

 
<!--/My Code-->
</head>

<body class="nav-md">

    <div class="container body"><!-- container body -->


        <div class="main_container"><!-- main_container -->

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><img src="images/ss1.jpg" height="50" width="50"> <span>SS Systems</span></a>
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
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="home.html"><i class="fa fa-home"></i> Home</a>
                                </li>

                                <li><a href="meter.html"><i class="fa fa-tachometer"></i> Meter</a>
                                </li>

                                <li><a href="tables_dynamic.html"><i class="fa fa-edit"></i> Logger</a>
                                </li>

                                <li><a><i class="fa fa-desktop"></i> Chart <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="multi.php">Power Chart</a>
                                        </li>
                                        <li><a href="unit.php">Unit Chart</a>
                                        </li>
                                    </ul>
                                </li>

                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="money.html">Money Table</a>
                                        </li>
                                        <li><a href="trip_table.html">Trip Table</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Add-on <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="#">Feature</a>
                                        </li>
                                        <li><a href="#">Future</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">Admin
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="index.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph">

                            <div class="row x_title">
                                <div class="col-md-6">
                                    <h3>Solar Power <small>Live Plot</small></h3>
                                </div>
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span id="dat"></span> <b class="caret"></b>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">

                              <div id="chartdiv" style="width: 100%; height: 400px;"></div>
                              <div style="margin-left:35px;">
                                  <input type="radio" checked="true" name="group" id="rb1" onclick="setPanSelect()">Select
                                  <input type="radio" name="group" id="rb2" onclick="setPanSelect()">Pan
                              </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
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

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="js/flot/date.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>

    <!-- /datepicker -->
    <!-- /footer content -->
</body>

</html>
