<?php
	// Delete the review reminder
	$sql = mysqli_query($conn, "DELETE FROM review_queue WHERE requestID = '$requestID'");
?>