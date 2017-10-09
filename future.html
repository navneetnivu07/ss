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
    
    <!-- WSN -->
    <link rel="stylesheet" type="text/css" href="../wsn/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="../wsn/css/demo.css" />
<link rel="stylesheet" type="text/css" href="../wsn/css/component.css" />


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
                url: 'scripts/ser.php', 
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

	<div class="container">
		<header>
			<h1>
				WSPAN Demo <em>Realtime</em> <span>Using TelosB Motes</span>
			</h1>
			<nav class="codrops-demos">
				<a href="#">Mote 1</a> <a class="current-demo"
					href="#">Mote 2</a> <a href="index.html">Mote 3</a>
			</nav>
		</header>

		<div class="component">

			<table>
				<thead>
					<tr>
						<th>Sample ID</th>
						<th>Temperature</th>
						<th>Humidity</th>
						<th>Date & Time</th>
					</tr>
				</thead>
			</table>

			<p></p>

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

	$.getJSON("../wsn/fetch.php", function(data) {
		$("p").empty();

		$.each(data.result, function() {
		$("p").append("<table><thead><tr><td><a1>Sample #"+this['ID']+"</a1></td><td><a2>"+this['temp']+"</a2></td><td><a3>"+this['hum']+"</a3></td><td><a4>"+this['date']+"</a4></td></tr></thead></table>");
		});
	});
}

</script>
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