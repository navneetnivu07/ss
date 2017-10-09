<?php

$servername = "localhost";
$username = "krishtecdb";
$password = "KRISHtec@57475747";
$dbname = "ss_systems";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
?>