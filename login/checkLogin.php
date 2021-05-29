<?php
	// Connect to MySQL database
	// Get username and password from the login form
	$conn = new mysqli("localhost","root","","a4m.com.au");
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// Prevent mySQL injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);
	
	// Get the credentials from the SQL query
	// If the credentials match, system is logged in
	// Otherwise, return to the login page and report error message
	$sql = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' AND password = MD5('$password')");
	if (mysqli_num_rows($sql)==1) {
		session_start();
		unset($_SESSION['error']);
		$_SESSION['username'] = $username;
		header('location:..\dashboard\dashboard.php');
	}
	else {
		session_start();
		$_SESSION['error'] = "Invalid username or password";
		header('location:login.php');
	}
?>