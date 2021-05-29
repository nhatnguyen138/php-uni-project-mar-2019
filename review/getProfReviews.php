<?php
	// Fetch all reviews of the PROFESSIONAL
	$profID = $_SESSION['username'];
	$sql = mysqli_query($conn,
		"SELECT * FROM review
			WHERE profID = '$profID'
			ORDER BY rating DESC");
	$num = mysqli_num_rows($sql);
	$query_set = mysqli_fetch_all($sql);
?>