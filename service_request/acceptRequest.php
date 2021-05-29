<?php
	// Connect to the SQL database
	// Add the data of the assistance request to the request queue
	// Then redirect the user to the dashboard page
	session_start();
	$conn = new mysqli("localhost","root","","a4m.com.au");
	$requestID  = $_POST['requestID'];
	$profID		= $_SESSION['username'];
	$price		= $_POST['price'];
	$sql=mysqli_query($conn,"INSERT INTO request_queue (requestID,profID,price) VALUES ('$requestID','$profID','$price')");
	header('location: ..\dashboard\dashboard.php');
?>