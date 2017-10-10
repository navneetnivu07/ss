<?php

/*
 * Developed by Navaneeth.M
 */


// DB table to use
$table = 'thudiyalur_site';

// Table's primary key
$primaryKey = 'ID';


// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array( 'db' => 'ID',    'dt' => 0 ),
	array( 'db' => 'trip',  'dt' => 3 , 'formatter'=> function($d,$row){ 
			switch($d)
                        {
                            case 0:
                            return "Nil";//Low Battery
                            break;
                            case 1:
                            return "&#x1f4c8 load";//Load
                            break;
                            case 2:
                            return "&#x1f50b High";
                            break;
                            case 3:
                            return "Output High";
                            break;
                            case 4:
                            return "High Temp";
                            break;
                            case 5:
                            return "Trip";
                            break;
                            default:
                            return "!!";
                            break;

                        }
									   }),
	array( 'db' => 'time',  'dt' => 1,
		   'formatter' => function( $d, $row ) {
			return date( 'd/m/Y', strtotime($d));
		}
	),
	array( 'db' => 'time',  'dt' => 2,
		   'formatter' => function( $d, $row ) {
			return date( 'H:i:s', strtotime($d));
		}
	)
);


// SQL server connection information
$sql_details = array(
	'user' => 'krishtecdb',
	'pass' => 'KRISHtec@57475747',
	'db'   => 'ss_systems',
	'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);




?>
