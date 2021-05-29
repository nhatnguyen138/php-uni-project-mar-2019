<?php
	// Display all service requests
	if ($num==0)
		echo '<p>No pending request</p>';
	else
	foreach($query_set as $key => $val) {
		echo
		'<div class="request_block">
			<h3>Request ID: '."$val[1]".'</h3>
			<table style="width:500px;margin:0px 50px;font-family:Verdana;font-size:14px;color:white;">
				<tr>
					<td width="150px"><b>Customer Name</b></td>
					<td>: '."$val[3]".'</td>
				</tr>
				<tr>
					<td><b>Contact Number</b></td>
					<td>: '."$val[4]".'</td>
				</tr>
				<tr>
					<td><b>Car Details</b></td>
					<td>: '."$val[6]".'</td>
				</tr>';
				$problem = $val[7];
				include '..\problem\getProblemInfo.php';
				echo
				'<tr>
					<td><b>Problem</b></td>
					<td>: '."$prob_name".'</td>
				</tr>';
				if ($val[8] == NULL)
					$description = "<i>&lt;no description&gt;</i>";
				else $description = $val[8];
				echo
				'<tr>
					<td style="vertical-align:top"><b>Description</b></td>
					<td>: '."$description".'</td>
				</tr>';
				$service_area = $val[9];
				include '..\service_area\getAreaInfo.php';
				echo
				'<tr>
					<td><b>Area</b></td>
					<td>: '."$area".'</td>
				</tr>
			</table>
			<br />
			<form action="..\service_request\acceptRequest.php" method="post">
				<input type="hidden" name="requestID" value="'."$val[1]".'">
				<p>
					Enter fee for this request (AUD): <input type="text" name="price"
						autocomplete="off" pattern="^\d{1,4}\.\d{2}|\d{1,4}$" required
						placeholder="ie. 399.99">
					<button type="submit" id="accept_button">Accept</button>
				</p>
			</form>
			<form action="..\service_request\declineRequest.php" method="post">
				<input type="hidden" name="requestID" value="'."$val[1]".'">
				<button type="submit" id="decline_button">Decline</button>
			</form>
		</div>';
	}
?>