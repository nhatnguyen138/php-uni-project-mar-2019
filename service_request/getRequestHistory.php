<?php
	// Get the information of the request history
	$username = $_SESSION['username'];
	$sql = mysqli_query($conn,
	"SELECT * FROM service_request
		WHERE custID = '$username'
		OR profID = '$username'");
	$num = mysqli_num_rows($sql);
	$query_set = mysqli_fetch_all($sql);
?>