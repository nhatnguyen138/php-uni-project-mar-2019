<?php
	// Generate an unique request ID for each customer and for each problem
	$sql = mysqli_query($conn, "SELECT count(*) FROM service_request");
	$row = mysqli_fetch_array($sql);
	$result = $row['count(*)']+1;
	$requestID = substr(md5($custID.$prob_code."abd".$result),-16);
?>