<?php
	// Display PROFESSIONAL information details
	echo
	'<h3>Professional Information</h3>';
	if ($usertype==1) {
		echo
		'<table style="margin:0px 20px;font-family:Verdana;font-size:14px;color:white;">
			<tr>
				<td width="200px"><b>Certificate Authority</b></td>
				<td>: '."$authority".'</td>
			</tr>
			<tr>
				<td><b>Certificate Number</b></td>
				<td>: '."$cert_number".'</td>
			</tr>
			<tr>
				<td><b>Service Area</b></td>';
				include '..\service_area\getAreaInfo.php';
				echo
				'<td>: '."$area".'</td>
			</tr>
			<tr>
				<td><b>Balance</b></td>
				<td>: AU$'."$balance".'</td>
			</tr>
		</table>
		<hr />';
	}
?>
