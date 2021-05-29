<?php
	// Fetch the USER information details
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	$row = mysqli_fetch_array($result);

	$is_online	= $row['is_online'];
	$fname  	= $row['fname'];
	$lname		= $row['lname'];
	$email		= $row['email'];
	$phone		= $row['phone'];
	$usertype	= $row['usertype'];
?>