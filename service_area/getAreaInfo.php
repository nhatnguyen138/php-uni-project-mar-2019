<?php
	// Fetch the name of the service area
	$sql = mysqli_query($conn, "SELECT * FROM service_area WHERE id = '$service_area'");
	$row = mysqli_fetch_array($sql);
	$area = $row['area'];
?>