<?php
	// Fetch the CUSTOMER information details
	$result = mysqli_query($conn, "SELECT * FROM customer WHERE username = '$username'");
	$row	= mysqli_fetch_array($result);
	
	$subscription = $row['subscription'];
	$car_brand	  = $row['car_brand'];
	$car_year	  = $row['car_year'];
	$car_rego	  = $row['car_rego'];
?>