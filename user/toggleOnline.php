<?php
	// Turn the user's status to ONLINE
	$username = $_SESSION['username'];
	$sql = mysqli_query($conn, "UPDATE user SET is_online = true WHERE username = '$username'");
?>