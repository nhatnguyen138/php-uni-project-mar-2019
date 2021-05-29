<?php
	// Connect to the SQL database
	// Create the new review
	// Delete the review reminder
	// Then redirect the user to the dashboard page
	session_start();
	$conn = new mysqli("localhost","root","","a4m.com.au");
	$requestID  = $_POST['requestID'];
	$custID		= $_SESSION['username'];
	$profID		= $_POST['profID'];
	$rating		= $_POST['rating'];
	$review		= $_POST['review'];
	$sql=mysqli_query($conn,
		"INSERT INTO review (requestID,custID,profID,rating,review)
			VALUES ('$requestID','$custID','$profID','$rating','$review')");
	include '..\review_queue\deleteReminder.php';
	header('location: ..\dashboard\dashboard.php');
?>