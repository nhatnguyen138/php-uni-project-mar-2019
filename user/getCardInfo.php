<?php
	// Fetch the CARD information details
	$username = $_SESSION['username'];
	$result = mysqli_query($conn, "SELECT * FROM card WHERE username = '$username'");
	$row = mysqli_fetch_array($result);

	$name_on_card	= $row['name_on_card'];
	$card_display  	= $row['card_display'];
	$card_number	= $row['card_number'];
	$exp_month		= $row['exp_month'];
	$exp_year		= $row['exp_year'];
	$cvv			= $row['cvv'];
?>