<?php
	// Add new CUSTOMER data to the database
	$car_brand		= $_POST['car_brand'];
	$car_year		= $_POST['car_year'];
	$car_rego		= $_POST['car_rego'];
	$subscription	= $_POST['subscription'];
	$sql=mysqli_query($conn,"INSERT INTO customer(username,car_brand,car_rego,car_year,subscription) VALUES ('$username','$car_brand','$car_rego','$car_year','$subscription')");
?>