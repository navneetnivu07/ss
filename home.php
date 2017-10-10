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
    <link href="css/maps/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />


<!--My Code-->
    <script type="text/javascript" src="js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>

<!-- 2. Add the JavaScript to initialize the chart on document ready -->
    <script>
        var chart; // global
        
        /**
         * Request data from the server, add it to the graph and set a timeout to request again
         */
         
        function requestData() {
            $.ajax({
                url: 'dao/dashboard.php', 
                success: function(point) {

                    var series = chart.series[0],
                        shift = series.data.length > 20; // shift if the series is longer than 20
                        $("#sp").html(point[1]);

                        $(".gauge-value").html(point[4]);

                        $("#dat").html(point[3]);
                        $("#sv").html(point[4]);
                        $("#si").html(point[5]);
                        $("#bv").html(point[6]);
                    //    $("#bi").html(point[7]);
                        $("#bp").html(point[7]*point[6]);
                        $("#tmp").html(point[8]);
                        
                        $("#iv").html(point[16]);
                        $("#ov").html(point[17]);
                        $("#gv").html(point[18]);
                        $("#if").html(point[19]);
                        $("#of").html(point[20]);
                        $("#lp").html(point[21]);
                        
                        //Trip Indication
                        switch(point[9])
                        {
                            case 0:
                            $("#tr").html("Nil");//Low Battery
                            break;
                            case 1:
                            $("#tr").html("&#x1f4c8 load");//Load
                            break;
                            case 2:
                            $("#tr").html("&#x1f50b High");
                            break;
                            case 3:
                            $("#tr").html("Output High");
                            break;
                            case 4:
                            $("#tr").html("High Temp");
                            break;
                            case 5:
                            $("#tr").html("Trip");
                            break;
                            default:
                            $("#tr").html("!!");
                            break;

                        }
                        $("#su").html(point[10]);//Solar Unit
                        //$("#sst").html(point[12]);
                        //$("#bp").html(point[13]);
                        //$("#bst").html(point[14]);
                        //$("#lpw").html(point[15]);

                        var nivu = point[4];
                        //alert(nivu);

                        //Solar Status
                        if(point[11]==0)
                        {
                        $("#sst").html("&#x2600 OK");
                        }
                        else if(point[11]==1)
                        {
                        $("#sst").html("&#x2600 Nil");
                        }

                        //Battery Status
                        switch(point[12])
                        {
                            case 0:
                            $("#bst").html("&#x1f50b Discharge");//Low Battery
                            break;
                            case 1:
                            $("#bst").html("&#x1f50b Boost");//Load
                            break;
                            case 2:
                            $("#bst").html("&#x1f50b Float");
                            break;
                            default:
                            $("#bst").html("!!");
                            break;
                        }
                        
                        //Battery Discharge
                        if(point[12]==0)
                        {
                        	 $("#bi").html(point[7]*-1);
                        }
                        else
                        {
        			        $("#bi").html(point[7]);
                        }

                        //Grid Status
                        switch(point[13])
                        {
                            case 0:
                            $("#gst").html("Grid Fail");
                            break;
                            case 1:
                            $("#gst").html("OK");
                            break;
                            case 2:
                            $("#gst").html("Stand By");
                            break;
                            default:
                            $("#gst").html("!!");
                            break;
                        }

                         //Inverter Status
                        switch(point[14])
                        {
                            case 0:
                            $("#ist").html("ON");
                            break;
                            case 1:
                            $("#ist").html("OFF");
                            break;
                            default:
                            $("#ist").html("!!");
                            break;
                        }

                    // add the point
                    chart.series[0].addPoint(eval(point), true, shift);
                    
                    // call it again after one second
                    setTimeout(requestData, 1000);  
                },
                cache: false
            });
        }
            
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'container_graph',
                    defaultSeriesType: 'spline',
                    events: {
                        load: requestData
                    }
                },
                title: {
                    text: 'SS Systems Solar MPPT Power Analysis'
                },
                xAxis: {
                    type: 'datetime',
                    tickPixelInterval: 150,
                    maxZoom: 20* 1000
                },
                yAxis: {
                    minPadding: 0.2,
                    maxPadding: 0.2,
                    title: {
                        text: 'Power (in Watts)',
                        margin: 80
                    }
                },
                series: [{
                    name: 'Solar Power',
                    data: []
                }]
            });
        });

        </script>

<!--/My Code-->
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

                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Solar Voltage</span>
                            <div class="count" id="sv"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Solar Current</span>
                            <div class="count" id="si"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Battery Voltage</span>
                            <div class="count" id="bv"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Battery Current</span>
                            <div class="count" id="bi"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Solar Power</span>
                            <div class="count" id="sp"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Solar Unit</span>
                            <div class="count" id="su"></div>
                        </div>
                    </div>

                </div>
                
                <!-- top tiles -->
                <div class="row tile_count">

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Grid Voltage</span>
                            <div class="count" id="gv"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Inverter Voltage</span>
                            <div class="count" id="iv"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Output Voltage</span>
                            <div class="count" id="ov"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Load Percentage</span>
                            <div class="count" id="lp"></div>
                        </div>
                    </div>


                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Input frequency</span>
                            <div class="count" id="if"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Ouput frequency</span>
                            <div class="count" id="of"></div>
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->

                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Solar Status</span>
                            <div class="count green" id="sst"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Battery Status</span>
                            <div class="count green" id="bst"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Grid Status</span>
                            <div class="count green" id="gst"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Inverter Status</span>
                            <div class="count green" id="ist"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Temperature</span>
                            <div class="count" id="tmp"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Trip Indication</span>
                            <div class="count green" id="tr"></div>
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->

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
                                <div id="container_graph" style="width: auto; height: 400px; margin: 0 auto"></div>
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