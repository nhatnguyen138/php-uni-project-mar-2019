<?php
	// Get the review queue information
	$username = $_SESSION['username'];
	$sql = mysqli_query($conn, "SELECT * FROM review_queue WHERE custID = '$username'");
	$num = mysqli_num_rows($sql);
	$query_set = mysqli_fetch_all($sql);
?>