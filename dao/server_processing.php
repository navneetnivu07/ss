<?php

/*
 * Developed by Navaneeth.M
 */

// DB table to use
$table = 'office_site';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array( 'db' => 'id',    'dt' => 0 ),
	array( 'db' => 'solv',  'dt' => 2 ),
	array( 'db' => 'soli',  'dt' => 3 ),
	array( 'db' => 'batv',  'dt' => 4 ),
	array( 'db' => 'bati',  'dt' => 5 ),
	array( 'db' => 'temp',  'dt' => 6 ),
	array( 'db' => 'trip',  'dt' => 7 ),
	array( 'db' => 'loadp', 'dt' => 8 ),
	array( 'db' => 'solp',  'dt' => 9 ),
	array( 'db' => 'solu',  'dt' => 10 ),
	array( 'db' => 'solst', 'dt' => 11 ),
	array( 'db' => 'gridst','dt' => 12 ),
	array( 'db' => 'invst', 'dt' => 13 ),
	array( 'db' => 'batst', 'dt' => 14 ),
	array( 'db' => 'invv',  'dt' => 15 ),
	array( 'db' => 'opv',   'dt' => 16 ),
	array( 'db' => 'gridv', 'dt' => 17 ),
	array( 'db' => 'ipf',   'dt' => 18 ),
	array( 'db' => 'opf',   'dt' => 19 ),

	array( 'db' => 'time',  'dt' => 1,
		   'formatter' => function( $d, $row ) {
			return date( 'd/m/Y h:i:s A', strtotime($d));
		}
	)
	
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => 'root',
	'db'   => 'solar_pcu',
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