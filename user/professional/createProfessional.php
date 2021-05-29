<?php
	// Add new PROFESSIONAL data to the database	
	$authority		= $_POST['authority'];
	$cert_number	= $_POST['cert_number'];
	$service_area	= $_POST['area'];
	$sql=mysqli_query($conn,"INSERT INTO professional(username,authority,cert_number,service_area,balance) VALUES ('$username','$authority','$cert_number','$service_area','0')");
?>