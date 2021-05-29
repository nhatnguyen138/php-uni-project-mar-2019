<?php
	// Add new USER data to the database
	$sql=mysqli_query($conn,"INSERT INTO user (username,password,fname,lname,email,phone,usertype) VALUES ('$username',MD5('$password'),'$fname','$lname','$email','$phone','$usertype')");
	if ($usertype==0)
		include 'customer\createCustomer.php';
	else if ($usertype==1)
		include 'professional\createProfessional.php';
?>