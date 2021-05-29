<?php
	// Fetch the information of the problem
	$sql = mysqli_query($conn, "SELECT * FROM problem WHERE id = '$problem'");
	$row = mysqli_fetch_array($sql);
	$prob_code 	= $row['prob_code'];
	$prob_name 	= $row['prob_name'];
?>