<?php
	// Create a reminder for the CUSTOMER to review the PROFESSIONAL
	$username2	= $profID;
	include '..\user\getUserInfo2.php';
	$prof_name = $fname2." ".$lname2;
	$sql=mysqli_query($conn,
	"INSERT INTO review_queue (requestID,custID,profID,prof_name)
		VALUES ('$requestID','$custID','$profID','$prof_name')");
?>