<?php
	// Fetch the PROFESSIONAL information details
	$result = mysqli_query($conn, "SELECT * FROM professional WHERE username = '$username'");
	$row	= mysqli_fetch_array($result);
	
	$rating			= $row['rating'];
	$balance		= $row['balance'];
	$authority		= $row['authority'];
	$cert_number	= $row['cert_number'];
	$service_area	= $row['service_area'];
?>