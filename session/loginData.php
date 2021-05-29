<?php
	// Turn user's status to ONLINE
	// And fetch all of the user's information details
	$conn = new mysqli("localhost","root","","a4m.com.au");
	include '..\user\toggleOnline.php';
	include '..\user\getUserInfo.php';
	include '..\user\getCardInfo.php';
	
	// If the user type is CUSTOMER, get the customer's info
	// If the user type is PROFESSIONAL, get the professional's info
	if ($usertype==0)
		include '..\user\customer\getCustInfo.php';
	else if ($usertype==1)
		include '..\user\professional\getProfInfo.php';
?>