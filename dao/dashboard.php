<?php 
// Set the JSON header

header("Content-type: text/json");

include 'connection.php';

    $query = "SELECT * FROM office_site order by ID DESC limit 1";

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
      //  $bp = $row[12];     //Battery Power
      //  $lpw= $y - $bp;     //Load Power
        $gst = $row[12];    //Grid Status
        $ist = $row[13];    //Inverter Status
        $bst = $row[14];    //Battery Status
        $invv = $row[15];	//Inverter Voltage
        $opv = $row[16];	//Output Voltage
        $gridv = $row[17];	//Grid Voltage
        $ipf = $row[18];	//Input frequency
        $opf = $row[19];	//Output frequency
    }


// The x value is the current JavaScript time, which is the Unix time multiplied by 1000.
$x = time()*1000;
$x = $x + 19803000;
//echo $x;
// The y value is a random number
$y = intval($y);
$tr = intval($tr);
$bst = intval($bst);
$gst = intval($gst);
$ist = intval($ist);
// Create a PHP array and echo it as JSON
$ret = array($x, $y, $id, $dt, $sv, $si, $bv, $bi, $tmp, $tr, $su, $sst, $bst, $gst, $ist,$bst,$invv,$opv,$gridv,$ipf,$opf,$lp);
echo json_encode($ret);
?>