<?php
	// Connect to the SQL database
	// Delete the review reminder then redirect the user to the dashboard page
	$conn = new mysqli("localhost","root","","a4m.com.au");
	$requestID  = $_POST['requestID'];
	include 'deleteReminder.php';
	header('location: ..\dashboard\dashboard.php');
?>