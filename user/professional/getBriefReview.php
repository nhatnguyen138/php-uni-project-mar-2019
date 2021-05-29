<?php
	// Fetch the top review of the PROFESSIONAL
	$sql = mysqli_query($conn,
		"SELECT * FROM review
			WHERE profID = '$username2'
			ORDER BY rating DESC LIMIT 1");
	$row = mysqli_fetch_array($sql);
	
	$cust = $row['custID'];
	$rat  = $row['rating'];
	$rev  = $row['review'];
	
	$review = "<b>".$cust.": ".$rat."*</b> ".$rev;
?>