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

    <!-- Datatables -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="datatable/media/js/jquery.dataTables.js"></script>
    <script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
       
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
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                
                                                <th>ID</th>
                                                <th>time</th>
                                                <th>solv</th>
                                                <th>soli</th>
                                                <th>batv</th>
                                                <th>bati</th>
                                                <th>temp</th>
                                                <th>trip</th>
                                                <th>loadp</th>
                                                <th>solp</th>
                                                <th>solu</th>
                                                <th>solst</th>
                                                <th>gridst</th>
                                                <th>invst</th>
                                                <th>batst</th>
                                                <th>invv</th>
                                                <th>opv</th>
                                                <th>gridv</th>
                                                <th>ipf</th>
                                                <th>opf</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="headings">
                                                <th>ID</th>
                                                <th>time</th>
                                                <th>solv</th>
                                                <th>soli</th>
                                                <th>batv</th>
                                                <th>bati</th>
                                                <th>temp</th>
                                                <th>trip</th>
                                                <th>loadp</th>
                                                <th>solp</th>
                                                <th>solu</th>
                                                <th>solst</th>
                                                <th>gridst</th>
                                                <th>invst</th>
                                                <th>batst</th>
                                                <th>invv</th>
                                                <th>opv</th>
                                                <th>gridv</th>
                                                <th>ipf</th>
                                                <th>opf</th>
                                            </tr>
                                        </tfoot>
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

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>
        
<script type="text/javascript" language="javascript" class="init">
    $.fn.dataTable.pipeline = function ( opts ) {
      // Configuration options
      var conf = $.extend( {
        pages: 5,     // number of pages to cache
        url: '',      // script url
        data: null,   // function or object with parameters to send to the server
                      // matching how `ajax.data` works in DataTables
        method: 'GET' // Ajax HTTP method
      }, opts );

      // Private variables for storing the cache
      var cacheLower = -1;
      var cacheUpper = null;
      var cacheLastRequest = null;
      var cacheLastJson = null;

      return function ( request, drawCallback, settings ) {
        var ajax          = false;
        var requestStart  = request.start;
        var drawStart     = request.start;
        var requestLength = request.length;
        var requestEnd    = requestStart + requestLength;

        if ( settings.clearCache ) {
          // API requested that the cache be cleared
          ajax = true;
          settings.clearCache = false;
        }
        else if ( cacheLower < 0 || requestStart < cacheLower || requestEnd > cacheUpper ) {
          // outside cached data - need to make a request
          ajax = true;
        }
        else if ( JSON.stringify( request.order )   !== JSON.stringify( cacheLastRequest.order ) ||
                  JSON.stringify( request.columns ) !== JSON.stringify( cacheLastRequest.columns ) ||
                  JSON.stringify( request.search )  !== JSON.stringify( cacheLastRequest.search )
        ) {
          // properties changed (ordering, columns, searching)
          ajax = true;
        }

        // Store the request for checking next time around
        cacheLastRequest = $.extend( true, {}, request );

        if ( ajax ) {
          // Need data from the server
          if ( requestStart < cacheLower ) {
            requestStart = requestStart - (requestLength*(conf.pages-1));

            if ( requestStart < 0 ) {
              requestStart = 0;
            }
          }

          cacheLower = requestStart;
          cacheUpper = requestStart + (requestLength * conf.pages);

          request.start = requestStart;
          request.length = requestLength*conf.pages;

          // Provide the same `data` options as DataTables.
          if ( $.isFunction ( conf.data ) ) {
            // As a function it is executed with the data object as an arg
            // for manipulation. If an object is returned, it is used as the
            // data object to submit
            var d = conf.data( request );
            if ( d ) {
              $.extend( request, d );
            }
          }
          else if ( $.isPlainObject( conf.data ) ) {
            // As an object, the data given extends the default
            $.extend( request, conf.data );
          }

          settings.jqXHR = $.ajax( {
            "type":     conf.method,
            "url":      conf.url,
            "data":     request,
            "dataType": "json",
            "cache":    false,
            "success":  function ( json ) {
              cacheLastJson = $.extend(true, {}, json);

              if ( cacheLower != drawStart ) {
                json.data.splice( 0, drawStart-cacheLower );
              }
              if ( requestLength >= -1 ) {
                json.data.splice( requestLength, json.data.length );
              }

              drawCallback( json );
            }
          } );
        }
        else {
          json = $.extend( true, {}, cacheLastJson );
          json.draw = request.draw; // Update the echo for each response
          json.data.splice( 0, requestStart-cacheLower );
          json.data.splice( requestLength, json.data.length );

          drawCallback(json);
        }
      }
    };

    // Register an API method that will empty the pipelined data, forcing an Ajax
    // fetch on the next draw (i.e. `table.clearPipeline().draw()`)
    $.fn.dataTable.Api.register( 'clearPipeline()', function () {
      return this.iterator( 'table', function ( settings ) {
        settings.clearCache = true;
      } );
    } );

    //
    // DataTables initialisation
    //
    $(document).ready(function() {
      $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": $.fn.dataTable.pipeline( {
          url: 'dao/server_processing.php',
          pages: 5 // number of pages to cache
        } )
      } );
    } );

</script>

</body>
</html>