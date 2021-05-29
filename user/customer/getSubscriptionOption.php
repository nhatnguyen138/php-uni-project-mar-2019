<?php
	// Fetch the CUSTOMER subscription option
	$result = mysqli_query($conn, "SELECT * FROM customer WHERE username = '$username2'");
	$row	= mysqli_fetch_array($result);
	
	$subscription2 = $row['subscription'];
?>