<?php
	// Connect to the SQL database
	// Mark the PROFESSIONAL as request declined by the CUSTOMER
	// Then redirect the user to the dashboard page
	$conn = new mysqli("localhost","root","","a4m.com.au");
	$requestID  = $_POST['requestID'];
	$profID		= $_POST['profID'];
	
	$sql = mysqli_query($conn,
	"UPDATE request_queue SET price = -1
		WHERE requestID = '$requestID'
		AND profID = '$profID'");
	
	header('location: ..\dashboard\dashboard.php');
?>