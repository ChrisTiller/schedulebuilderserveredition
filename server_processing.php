<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 

 

$table = 'Courses';
 

$primaryKey = 'Number';
 
/
$columns = array(
    array( 'db' => 'Number', 'dt' => 0 ),
    array( 'db' => 'CRN',  'dt' => 1 ),
    array( 'db' => 'Subject',   'dt' => 2 ),
    array( 'db' => 'CRS',     'dt' => 3 ),
array( 'db' => 'TITLE',     'dt' => 4 ),
array( 'db' => 'CH',     'dt' => 5 ),
array( 'db' => 'MaxSeats',     'dt' => 6 ),
array( 'db' => 'Enrolled',     'dt' => 7 ),
array( 'db' => 'AvailableSeats',     'dt' => 8 ),
array( 'db' => 'Days',     'dt' => 9 ),
array( 'db' => 'STIME',     'dt' => 10 ),
array( 'db' => 'ETIME',     'dt' => 11 ),
array( 'db' => 'Building',    'dt' => 12 ),
array( 'db' => 'Room',    'dt' => 13 ),
array( 'db' => 'Instructor',     'dt' => 14 )

	
	
    
  
);
 

$sql_details = array(
    'user' => '',
    'pass' => '',
    'db'   => '',
    'host' => ''
);
 
 

 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);