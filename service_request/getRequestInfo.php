<?php
	// Fetch the USER information details
	$result = mysqli_query($conn, "SELECT * FROM service_request WHERE requestID = '$requestID'");
	$row = mysqli_fetch_array($result);

	$custID			= $row['custID'];
	$cust_name		= $row['cust_name'];
	$cust_phone		= $row['cust_phone'];
	$car			= $row['car'];
	$problem  		= $row['problem'];
	$description	= $row['description'];
	$service_area	= $row['service_area'];
?>