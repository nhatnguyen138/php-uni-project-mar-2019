<?php
	// Update usernname
	$sql=mysqli_query($conn,"UPDATE user SET username = '$username' WHERE username = '$username'");

	// Update first name
	$sql=mysqli_query($conn,"UPDATE user SET fname = '$fname' WHERE username = '$username'");
	
	// Update last name
	$sql=mysqli_query($conn,"UPDATE user SET lname = '$lname' WHERE username = '$username'");
	
	// Update email
	$sql=mysqli_query($conn,"UPDATE user SET email = '$email' WHERE username = '$username'");
	
	// Update phone number
	$sql=mysqli_query($conn,"UPDATE user SET phone = '$phone' WHERE username = '$username'");
?>