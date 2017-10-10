<!DOCTYPE HTML PUBLIC>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SS Systems| Meter </title>

        <!-- Bootstrap core CSS -->

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">

        <!-- Theme styling -->

        <link href="css/custom.css" rel="stylesheet">

        <!-- 1. Add these JavaScript inclusions in the head of your page -->
        <script type="text/javascript" src="js/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="js/highcharts.js"></script>
        
    <!-- Liquid fill gauge-->
    <script src="http://d3js.org/d3.v3.min.js" language="JavaScript"></script>
    <script src="js/liquidFillGauge.js" language="JavaScript"></script>
    <style>
        .liquidFillGaugeText { font-family: Helvetica; font-weight: bold; }
    </style>

        <!-- 2. Add the JavaScript to initialize the chart on document ready -->

<!-- Fetch JSON data-->

<script type="text/javascript">

    $(document).ready( function() {
    done();
    });

    function done() {
    setTimeout( function() { 
    updates(); 
    done();
    }, 200);
    }

    function updates()  {
    $.getJSON('dao/meter.php', function(data) {
        $("#sv").html(data[0]);
        $("#bv").html(data[1]);
        $("#gv").html(data[2]);
        $("#iv").html(data[3]);
        $("#ov").html(data[4]);
        $("#loadp").html(data[5]);

    //alert(data);
    });
    }

</script>

<!-- Google API charts-->

 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["gauge"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Mains Voltage', 0],
          ['Inverter Voltage', 0],
          ['Output Voltage', 0],
        ]);

        var data_solv = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Solar Voltage', 0],
          ['Battery Voltage', 0],
        ]);

        var options = {
          width: 720, height: 240,
          yellowFrom:250, yellowTo: 280,
          redFrom: 280, redTo: 300,
          minorTicks: 5, max:300
        };

        var options_solv = {
          width: 480, height: 240,
          yellowFrom:420, yellowTo: 500,
          redFrom: 500, redTo: 560,
          minorTicks: 5, max:560
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        var chart_solv = new google.visualization.Gauge(document.getElementById('chart_solv_div'));

        chart.draw(data, options);

        chart_solv.draw(data_solv, options_solv);

        setInterval(function() {
            var solvolg = $("#sv").html();
          data_solv.setValue(0, 1, solvolg);
          chart_solv.draw(data_solv, options_solv);
        }, 1000);

        setInterval(function() {
            var batvolg = $("#bv").html();
          data_solv.setValue(1, 1, batvolg);
          chart_solv.draw(data_solv, options_solv);
        }, 1000);

        setInterval(function() {
            var solcurg = $("#gv").html();
          data.setValue(0, 1, solcurg);
          chart.draw(data, options);
        }, 1000);

        setInterval(function() {
            var batcurg = $("#iv").html();
          data.setValue(1, 1, batcurg);
          chart.draw(data, options);
        }, 1000);

        setInterval(function() {
            var loadpg = $("#ov").html();
          data.setValue(2, 1, loadpg);
          chart.draw(data, options);
        }, 1000);

      }
    </script>

<!-- Google API charts-->
<!--High charts-->

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
                    <div class="col-md-12 col-sm-12 col-xs-12">        
                        <div class="dashboard_graph">
                            <div class="row x_title">
                                <div class="col-md-6"></div>
                                    <h3>Analog Meter <small>Voltage</small></h3>
                                </div>
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span id="dat"></span> <b class="caret"></b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="chart_div" style="width: 720px; height: 240px; margin-left:200px"></div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div id="chart_solv_div" style="width: 480px; height: 240px; margin-left:200px"></div>
                                <svg id="fillgauge1" style="float:left;width:210px; height:210px;margin-left:690px; margin-top:-230px"></svg>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

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
                            <span class="count_top"><i class="fa fa-clock-o"></i> Battery Voltage</span>
                            <div class="count" id="bv"></div>
                        </div>
                    </div>

                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Grid Voltage</span>
                            <div class="count green" id="gv"></div>
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
                            <div class="count green" id="loadp"></div>
                        </div>
                    </div>
                </div>
                <!-- /top tiles -->

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
      
    <script language="JavaScript">
        var gauge1 = loadLiquidFillGauge("fillgauge1", 0);
        var config1 = liquidFillGaugeDefaultSettings();
        config1.circleColor = "#FF7777";
        config1.textColor = "#FF4444";
        config1.waveTextColor = "#FFAAAA";
        config1.waveColor = "#FFDDDD";
        config1.circleThickness = 0.2;
        config1.textVertPosition = 0.2;
        config1.waveAnimateTime = 1000;
        
        function NewValue(){
            var loadgauge = $("#loadp").html();
            return loadgauge;
        }
        
        setInterval(function() {
            gauge1.update(NewValue()); 
        }, 1000);
    </script>

  </body>
</html>