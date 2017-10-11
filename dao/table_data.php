<?php

    include 'connection.php';
    date_default_timezone_set('Asia/Calcutta');
    $dateIndia = date("Y-m-d h:i:sA");

    $query = "SELECT * FROM office_site order by ID DESC";

    $res = mysqli_query($conn,$query);

     $result  = array();

    while ($row = mysqli_fetch_array($res))
    {

    	array_push($result, array('id' => $row['id'],
                                  'time' => $row['time'],
                                  'solv' => $row['solv'],
                                    'soli' => $row['soli'],
                                    'batv' => $row['batv'],
                                    'bati' => $row['bati'],
                                    'temp' => $row['temp'],
                                  'trip' => $row['trip'],
                                  'conditionTime' => date_diff(date_create($row['time']),date_create($dateIndia))->format("%d days %h hours %i minutes")));
 
    }
    
       echo json_encode(array("result" => $result  ));

?>


         <!--  
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
-->