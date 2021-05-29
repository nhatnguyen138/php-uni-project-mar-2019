<?php
	// Turn user's status to OFFLINE
	session_start();
	$conn = new mysqli("localhost","root","","a4m.com.au");
	include '..\user\toggleOffline.php';
	
	// Terminate the login session
	// Close the database
	// And direct the user to the login page
	session_destroy();
	mysqli_close($conn);
	header('location:..\index.php');
?>