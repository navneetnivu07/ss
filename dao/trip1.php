<?php

    include 'connection.php';

    $query = "SELECT * FROM thudiyalur_site order by ID DESC limit 1";

    $res = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_array($res))
    {
    	$sv = $row[2];
    	$bv = $row[4];
        $iv = $row[15];
        $ov = $row[16];
    	$gv = $row[17];
        $loadp = $row[8];

    }
    $ret=array($sv, $bv, $gv, $iv, $ov, $loadp);
       echo json_encode($ret);

?>