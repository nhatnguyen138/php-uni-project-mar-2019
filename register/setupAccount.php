<?php
	// Connect to the SQL database
	// And fetch the input data
	session_start();
	$conn = new mysqli("localhost","root","","a4m.com.au");
	$fname		= $_POST['fname'];
	$lname		= $_POST['lname'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$passwordc	= $_POST['passwordc'];
	$email		= $_POST['email'];
	$phone		= $_POST['phone'];
	$usertype	= $_POST['usertype'];

	// Check if the username is valid and if the re-type password is match
	include 'isUsernameTaken.php';
	include 'isPasswordMatch.php';
		
	// If it has no error, insert the data to the SQL database
	// Otherwise, return to the signup page
	if (($usernameCheck==true) && ($passwordCheck==true)) {
		include '..\user\createUser.php';
		include '..\user\createCard.php';
		header('location:signupSuccessful.php');
	}
	else {
		header('location:signupAccount.php');
	}
?>