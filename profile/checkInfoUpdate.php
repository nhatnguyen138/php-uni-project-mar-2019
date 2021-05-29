<?php
	// Connect to the SQL database
	// And fetch all the input data
	session_start();
	$conn = new mysqli("localhost","root","","a4m.com.au");
	$current_username = $_SESSION['username'];
	$fname		= $_POST['fname'];
	$lname		= $_POST['lname'];
	$username	= $_POST['username'];
	$email		= $_POST['email'];
	$phone		= $_POST['phone'];
	
	// Check if the username is valid
	$check = true;
	$query = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if ((mysqli_num_rows($query)>0) && ($current_username!=$username)) {
		$_SESSION['usrn_error'] = "Username taken";
		$check = false;
	}
	else unset($_SESSION['usrn_error']);
	
	// If it has no error, insert the data to the SQL database
	// Otherwise, return to the edit profile page
	if ($check) {
		include '..\user\updateUserInfo.php';
		header('location:profile.php');
	}
	else header('location:editProfile.php');
?>