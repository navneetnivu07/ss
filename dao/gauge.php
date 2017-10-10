<?php 
// Set the JSON header

header("Content-type: text/json");

include 'connection.php';

    $query = "SELECT * FROM thudiyalur_site order by ID DESC limit 1";

    $res = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_array($res))
    {
    	$id = $row[0];		//ID
    	$dt = $row[1];		//Date and Time
    	$sv = $row[2];		//Solar Voltage
    	$si = $row[3];		//Solar Current
    	$bv = $row[4];		//Battery Voltage
    	$bi = $row[5];		//Battery Current
    	$tmp= $row[6];		//Temperature
    	$tr = $row[7];      //Trip Indication
    	$lp = $row[8];      //Load Percentage
        $y  = $row[9];      //Solar Power
        $su = $row[10];     //Solar Unit
        $sst = $row[11];    //Solar State
        $bp = $row[12];     //Battery Power
        $bst = $row[13];    //Battery State
        $lpw= $y - $bp;     //Load Power
    }


// The x value is the current JavaScript time, which is the Unix time multiplied by 1000.
$x = time()*1000;
$x = $x + 19803000;
//echo $x;
// The y value is a random number
$y = intval($y);
$tr = intval($tr);
// Create a PHP array and echo it as JSON
$ret = array($x, $y, $id, $dt, $sv, $si, $bv, $bi, $tmp, $tr, $lp, $su, $sst, $bp, $bst, $lpw);
echo json_encode($ret);
?>