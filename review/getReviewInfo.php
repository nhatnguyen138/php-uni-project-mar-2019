<?php
	// Fetch the review information details
	$result = mysqli_query($conn, "SELECT * FROM review WHERE requestID = '$requestID'");
	$row = mysqli_fetch_array($result);

	$custID = $row['custID'];
	$profID	= $row['profID'];
	$rating	= $row['rating'];
	$review	= $row['review'];
?>