<?php
	// Check if the username is valid
	$usernameCheck = true;
	$query = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if (mysqli_num_rows($query)>0) {
		$_SESSION['usrn_error'] = "Username taken";
		$usernameCheck = false;
	}
	else {
		unset($_SESSION['usrn_error']);
	}
?>