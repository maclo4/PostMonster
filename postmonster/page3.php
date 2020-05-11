<?php  
	include "db_connect.php";
	
	$AdType = $_REQUEST["AdType"];
	$Age1 = $_REQUEST["Age1"];
	//$Age2 = $_REQUEST["Age2"];

	$sql = "INSERT INTO User_ad_info (Ad_type, Audience) VALUES ('$AdType', '$Age1')";
		
	$result = $mysqli->query($sql);
?>