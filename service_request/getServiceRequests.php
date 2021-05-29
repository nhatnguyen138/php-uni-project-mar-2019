<?php
	// Get the information of all the available service requests
	$username = $_SESSION['username'];
	$sql = mysqli_query($conn,
	"SELECT * FROM service_request
		WHERE service_request.service_area = '$service_area'
		AND service_request.is_assigned = false
		AND '$username' NOT IN(
			SELECT request_queue.profID FROM request_queue
			WHERE request_queue.requestID = service_request.requestID)");
	$num = mysqli_num_rows($sql);
	$query_set = mysqli_fetch_all($sql);
?>