<?php
	// Turn the user's status to OFFLINE
	$username = $_SESSION['username'];
	$sql = mysqli_query($conn, "UPDATE user SET is_online = false WHERE username = '$username'");
?>