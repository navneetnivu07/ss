<?php

/*
 * Developed by Navaneeth.M
 */

// DB table to use
$table = 'thudiyalur_site_max';

// Table's primary key
$primaryKey = 'ID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
	array( 'db' => 'ID',    'dt' => 0 ),
	array( 'db' => 'msolp',  'dt' => 2 ),
	array( 'db' => 'mbatp',  'dt' => 3 ),
	array( 'db' => 'mloadp',  'dt' => 4 ),
	array( 'db' => 'munit',  'dt' => 5 ),
	array( 'db' => 'time',  'dt' => 1,
		   'formatter' => function( $d, $row ) {
			return date( 'jS M y', strtotime($d));
		}
	),
	array( 'db' => 'munit',	'dt' => 6,
		   'formatter' => function( $d, $row ) {
			return '₹'.number_format($d*7);
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


