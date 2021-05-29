<?php
	// Display CUSTOMER information details
	echo
	'<h3>Customer Information</h3>';
	if ($usertype==0) {
		echo
		'<table style="margin:0px 20px;font-family:Verdana;font-size:14px;color:white;">
			<tr>
				<td width="200px"><b>Subscription</b></td>';
				if ($subscription==0)
					echo
					'<td>: Pay-on-demand</td>';
				else if ($subscription==1)
					echo
					'<td>: Membership</td>';
			echo
			'</tr>
			<tr>
				<td><b>Car Series</b></td>
				<td>: '."$car_brand".' '."$car_year".'</td>
			</tr>
			<tr>
				<td><b>Car Registration Number</b></td>
				<td>: '."$car_rego".'</td>
			</tr>
		</table>
		<hr />';
	}
?>
