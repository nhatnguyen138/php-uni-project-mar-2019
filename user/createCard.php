<?php
	// Get the card information
	// Add the card data to the SQL database
	$name_on_card	= $fname." ".$lname;
	$card_number	= str_replace(' ', '',$_POST['card_number']);
	$card_display	= "XXXX-XXXX-XXXX-".substr($card_number,-4);
	$exp_month		= $_POST['exp_month'];
	$exp_year		= $_POST['exp_year'];
	$cvv			= $_POST['cvv'];
	
	$sql=mysqli_query($conn,"INSERT INTO card (username,name_on_card,card_display,card_number,exp_month,exp_year,cvv) VALUES ('$username','$name_on_card','$card_display',MD5('$card_number'),'$exp_month','$exp_year',MD5('$cvv'))");
?>