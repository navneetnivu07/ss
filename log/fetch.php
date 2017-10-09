<?php

    include 'connection.php';

    $query = "SELECT * FROM thudiyalur_site order by ID DESC limit 100";

    $res = mysqli_query($conn,$query);

     $result  = array();

    while ($row = mysqli_fetch_array($res))
    {

    	array_push($result, array('ID' => $row[0],
    				  'time' => $row[1],
    				  'solv' => $row[2],
				  'soli' => $row[3],
				  'batv' => $row[4],
				  'bati' => $row[5],
				  'temp' => $row[6],
				  'trip' => $row[7],
				  'loadp' => $row[8],
				  'solp' => $row[9],
				  'solu' => $row[10],
				  'solst' => $row[11],
				  'gridst' => $row[12],
				  'invst' => $row[13],
				  'batst' => $row[14],
				  'invv' => $row[15],
				  'opv' => $row[16],
				  'gridv' => $row[17],
				  'ipf' => $row[18],
				  'opf' => $row[19]));
 
    }
    
       echo json_encode(array("result" => $result  ));

?>