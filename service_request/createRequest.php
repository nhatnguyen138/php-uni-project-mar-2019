<?php
	// Connect to the SQL database
	// Provide appropriate information to create the service request
	session_start();
	$username = $_SESSION['username'];
	$conn = new mysqli("localhost","root","","a4m.com.au");
	include '..\user\getUserInfo.php';
	include '..\user\customer\getCustInfo.php';
	
	// Create the appropriate variables
	$custID			= $username;
	$cust_name		= $fname." ".$lname;
	$cust_phone		= $phone;
	$car			= $car_brand." ".$car_year." - ".$car_rego;
	$service_area	= $_POST['area'];
	$description	= $_POST['description'];
	$problem		= $_POST['problem'];
	include '..\problem\getProblemInfo.php';
	
	// Generate the request ID
	include 'generateRequestID.php';
	
	// Create the service request
	$sql=mysqli_query($conn,
		"INSERT INTO service_request (requestID,custID,cust_name,cust_phone,car,problem,description,service_area)
			VALUES ('$requestID','$custID','$cust_name','$cust_phone','$car','$problem','$description','$service_area')");
	header('location: ..\dashboard\dashboard.php');
?>