<?php
	// Update the PROFESSIONAL's new balance
	$sql = mysqli_query($conn,
	"UPDATE professional
		SET balance = balance + '$price'
		WHERE username = '$profID'");
?>