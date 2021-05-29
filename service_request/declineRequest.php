<?php
	// Connect to the SQL database
	// Mark the PROFESSIONAL as declining the service request
	// Then redirect the user to the dashboard page
	session_start();
	$conn = new mysqli("localhost","root","","a4m.com.au");
	$requestID  = $_POST['requestID'];
	$profID		= $_SESSION['username'];
	$sql=mysqli_query($conn,"INSERT INTO request_queue(requestID,profID,price) VALUES ('$requestID','$profID','-1')");
	header('location: ..\dashboard\dashboard.php');
?>