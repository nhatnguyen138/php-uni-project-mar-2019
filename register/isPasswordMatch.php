<?php
	// Check if the re-type password is match
	$passwordCheck = true;
	if ($password!=$passwordc) {
		$_SESSION['pwrd_error'] = "Password not match";
		$passwordCheck = false;
	}
	else {
		unset($_SESSION['pwrd_error']);
	}
?>