<?php
	// Calculate PROFESSIONAL's overall rating
	include '..\review\getProfReviews.php';
	if ($num>0) {
		$rating = 0.0;
		foreach($query_set as $key => $val) {
			$rating+= $val[3];
		}
		$rating = round($rating/$num,1);
		$sql = mysqli_query($conn,
			"UPDATE professional
				SET rating = '$rating'
				WHERE username = '$profID'");
	}
?>