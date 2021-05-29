<?php
	// Fetch the USER information details
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username2'");
	$row = mysqli_fetch_array($result);

	$fname2  	= $row['fname'];
	$lname2		= $row['lname'];
	$email2		= $row['email'];
	$phone2		= $row['phone'];
	$usertype2	= $row['usertype'];
?>