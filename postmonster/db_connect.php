<?php



$database_in_use = "admonster";
$dbhost = 'db4free.net';
$dbuser = 'maclo4ads';
$dbpass = 'testpassword';
//$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass);
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database_in_use);

if(! $mysqli ) {
die('Could not connect: ' . mysqli_error());
}



?>