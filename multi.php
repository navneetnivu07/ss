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
        include 'dao/connection.php';
        /* Fetch result set from t_test table */
        $data=mysqli_query($conn,"SELECT * FROM site_1max");

    ?>

    <script type="text/javascript">
        var myData=<?php 
        $result  = array();
        while ($row = mysqli_fetch_array($data))
        {

            array_push($result, array('solp' => $row[2],
                                    'batp' => $row[3],
                                    'loadp' => $row[4])
                                    );
    
        }
        
        echo json_encode($result); /* We use the concatenation operator '.' to add comma delimiters after each data value. */
        $conn->close();
    ?>;

    //  alert(myData[0].date);
    </script>

    <script>
        var chart;
        var chartData = [];

        AmCharts.ready(function () {
            // generate some random data first
            generateChartData();

            // SERIAL CHART
            chart = new AmCharts.AmSerialChart();

            chart.dataProvider = chartData;
            chart.categoryField = "date";

            // listen for "dataUpdated" event (fired when chart is inited) and call zoomChart method when it happens
            chart.addListener("dataUpdated", zoomChart);

            // AXES
            // category
            var categoryAxis = chart.categoryAxis;
            categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
            categoryAxis.minPeriod = "DD"; // our data is daily, so we set minPeriod to DD
            categoryAxis.minorGridEnabled = true;
            categoryAxis.axisColor = "#DADADA";
            categoryAxis.twoLineMode = true;
            categoryAxis.dateFormats = [{
                period: 'fff',
                format: 'JJ:NN:SS'
            }, {
                period: 'ss',
                format: 'JJ:NN:SS'
            }, {
                period: 'mm',
                format: 'JJ:NN'
            }, {
                period: 'hh',
                format: 'JJ:NN'
            }, {
                period: 'DD',
                format: 'DD'
            }, {
                period: 'WW',
                format: 'DD'
            }, {
                period: 'MM',
                format: 'MMM'
            }, {
                period: 'YYYY',
                format: 'YYYY'
            }];

            // first value axis (on the left)
            var valueAxis1 = new AmCharts.ValueAxis();
            valueAxis1.axisColor = "#FF6600";
            valueAxis1.axisThickness = 2;
            valueAxis1.gridAlpha = 0;
            chart.addValueAxis(valueAxis1);

            // second value axis (on the right)
            var valueAxis2 = new AmCharts.ValueAxis();
            valueAxis2.position = "right"; // this line makes the axis to appear on the right
            valueAxis2.axisColor = "#FCD202";
            valueAxis2.gridAlpha = 0;
            valueAxis2.axisThickness = 2;
            chart.addValueAxis(valueAxis2);

            // third value axis (on the left, detached)
            valueAxis3 = new AmCharts.ValueAxis();
            valueAxis3.offset = 50; // this line makes the axis to appear detached from plot area
            valueAxis3.gridAlpha = 0;
            valueAxis3.axisColor = "#B0DE09";
            valueAxis3.axisThickness = 2;
            chart.addValueAxis(valueAxis3);

            // GRAPHS
            // first graph
            var graph1 = new AmCharts.AmGraph();
            graph1.valueAxis = valueAxis1; // we have to indicate which value axis should be used
            graph1.title = "Solar Power";
            graph1.valueField = "visits";
            graph1.bullet = "round";
            graph1.hideBulletsCount = 30;
            graph1.bulletBorderThickness = 1;
            chart.addGraph(graph1);

            // second graph
            var graph2 = new AmCharts.AmGraph();
            graph2.valueAxis = valueAxis2; // we have to indicate which value axis should be used
            graph2.title = "Battery Power";
            graph2.valueField = "hits";
            graph2.bullet = "square";
            graph2.hideBulletsCount = 30;
            graph2.bulletBorderThickness = 1;
            chart.addGraph(graph2);

            // third graph
            var graph3 = new AmCharts.AmGraph();
            graph3.valueAxis = valueAxis3; // we have to indicate which value axis should be used
            graph3.valueField = "views";
            graph3.title = "Load Power";
            graph3.bullet = "triangleUp";
            graph3.hideBulletsCount = 30;
            graph3.bulletBorderThickness = 1;
            chart.addGraph(graph3);

            // CURSOR
            var chartCursor = new AmCharts.ChartCursor();
            chartCursor.cursorAlpha = 0.1;
            chartCursor.fullWidth = true;
            chart.addChartCursor(chartCursor);

            // SCROLLBAR
            var chartScrollbar = new AmCharts.ChartScrollbar();
            chart.addChartScrollbar(chartScrollbar);

            // LEGEND
            var legend = new AmCharts.AmLegend();
            legend.marginLeft = 110;
            legend.useGraphSettings = true;
            chart.addLegend(legend);

            // WRITE
            chart.write("chartdiv");
        });

        // generate some random data, quite different range
        function generateChartData() {
            var firstDate = new Date();
            firstDate.setDate(firstDate.getDate() - 50);

            for (var i = 0; i < myData.length; i++) {
                // we create date objects here. In your data, you can have date strings
                // and then set format of your dates using chart.dataDateFormat property,
                // however when possible, use date objects, as this will speed up chart rendering.
                var newDate = new Date(firstDate);
                newDate.setDate(newDate.getDate() + i);


                chartData.push({
                    date: newDate,
                    visits: myData[i].solp,
                    hits: myData[i].batp,
                    views: myData[i].loadp
                });
            }
        }

        // this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart.zoomToIndexes(10, 20);
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
