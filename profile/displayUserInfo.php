<?php
	// Display USER information details
	echo
	'<table style="margin:0px 20px;font-family:Verdana;font-size:14px;color:white;">
		<tr>
			<td width="200px"><b>Full name</b></td>
			<td>: '."$fname".' '."$lname".'</td>
		</tr>
		<tr>
			<td><b>Username</b></td>
			<td>: '."$username".'</td>
		</tr>
		<tr>
			<td><b>Email</b></td>
			<td>: '."$email".'</td>
		</tr>
		<tr>
			<td><b>Phone Number</b></td>
			<td>: '."$phone".'</td>
		</tr>
		<tr>
			<td><b>Card Number</b></td>
			<td>: '."$card_display".'</td>
		</tr>
	</table>
	<hr />';
?>