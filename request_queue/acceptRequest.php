<?php
	// Connect to the SQL database
	// Add the data of the chosen assistance request to the service request
	// Delete all data in the request queue
	// Then redirect the user to the dashboard page
	session_start();
	$conn = new mysqli("localhost","root","","a4m.com.au");
	$requestID  = $_POST['requestID'];
	$custID		= $_SESSION['username'];
	$profID		= $_POST['profID'];
	$price		= $_POST['price'];
	$sql = mysqli_query($conn,
	"UPDATE service_request
		SET profID='$profID',price='$price',is_assigned=true
		WHERE requestID = '$requestID'");
	$sql = mysqli_query($conn, "DELETE FROM request_queue WHERE requestID = '$requestID'");
	include '..\review_queue\createReviewQueue.php';
	include '..\user\professional\calcBalance.php';
	header('location: ..\dashboard\dashboard.php');
?>