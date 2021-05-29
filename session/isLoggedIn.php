<?php
	// Check if the system is logged in
	session_start();
	function isloggedIn() {
		if (isset($_SESSION['username']) && !empty($_SESSION['username']))
			return true;
		else
			return false;
	}
	
	// If it is not logged in, direct user to the login page
	if (!isLoggedIn()) 
		header('location:..\index.php');
?>