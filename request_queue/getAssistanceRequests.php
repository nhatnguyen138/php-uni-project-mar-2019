<?php
	// Get the information of all of the USER's assistance requests
	$username = $_SESSION['username'];
	$sql = mysqli_query($conn,
		"SELECT * FROM request_queue
			WHERE requestID IN
				(SELECT requestID FROM service_request
				WHERE custID = '$username'
				AND is_assigned = false)
			AND price <> -1");
	$num = mysqli_num_rows($sql);
	$query_set = mysqli_fetch_all($sql);
?>