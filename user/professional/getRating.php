<?php
	// Fetch the top review of the PROFESSIONAL
	$sql = mysqli_query($conn, "SELECT * FROM professional WHERE username = '$username2'");
	$row = mysqli_fetch_array($sql);
	$rating = $row['rating'];
?>