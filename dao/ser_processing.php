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
	array( 'db' => 'id',    'dt' => 'id' ),
	array( 'db' => 'solv',  'dt' => 'solv' ),
	array( 'db' => 'soli',  'dt' => 'soli' ),
	array( 'db' => 'batv',  'dt' => 'batv' ),
	array( 'db' => 'bati',  'dt' => 'bati' ),
	array( 'db' => 'temp',  'dt' => 'temp' ),
	array( 'db' => 'trip',  'dt' => 'trip' ),
	array( 'db' => 'loadp', 'dt' => 'loadp' ),
	array( 'db' => 'solp',  'dt' => 'solp' ),
	array( 'db' => 'solu',  'dt' => 'solu' ),
	array( 'db' => 'solst', 'dt' => 'solst' ),
	array( 'db' => 'gridst','dt' => 'gridst' ),
	array( 'db' => 'invst', 'dt' => 'invst' ),
	array( 'db' => 'batst', 'dt' => 'batst' ),
	array( 'db' => 'invv',  'dt' => 'invv' ),
	array( 'db' => 'opv',   'dt' => 'opv' ),
	array( 'db' => 'gridv', 'dt' => 'gridv' ),
	array( 'db' => 'ipf',   'dt' => 'ipf' ),
	array( 'db' => 'opf',   'dt' => 'opf' ),

	array( 'db' => 'time',  'dt' => 'time',
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