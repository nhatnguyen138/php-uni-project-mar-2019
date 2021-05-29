<?php
	// Display all service requests
	if ($num==0)
		echo '<p>No request</p>';
	else
	foreach($query_set as $key => $val) {
		echo
		'<div class="request_block">
			<h3>Request ID: '."$val[0]".'</h3>';
			$requestID = $val[0];
			include '..\service_request\getRequestInfo.php';
			echo
			'<table style="width:500px;margin:0px 50px;font-family:Verdana;font-size:14px;color:white;">
				<tr>
					<td width="150px"><b>Car Details</b></td>
					<td>: '."$car".'</td>
				</tr>';
				include '..\problem\getProblemInfo.php';
				echo
				'<tr>
					<td><b>Problem</b></td>
					<td>: '."$prob_name".'</td>
				</tr>';
				if ($description == NULL)
					$description = "<i>&lt;no description&gt;</i>";
				echo
				'<tr>
					<td style="vertical-align:top"><b>Description</b></td>
					<td>: '."$description".'</td>
				</tr>';
				include '..\service_area\getAreaInfo.php';
				echo
				'<tr>
					<td><b>Area</b></td>
					<td>: '."$area".'</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>';
				$username2 = $val[1];
				include '..\user\getUserInfo2.php';
				include '..\user\professional\getRating.php';
				include '..\user\professional\getBriefReview.php';
				echo
				'<tr>
					<td><b>Professional ID</b></td>
					<td>: '."$username2".'</td>
				</tr>
				<tr>
					<td><b>Full Name</b></td>
					<td>: '."$fname2".' '."$lname2".'</td>
				</tr>
				<tr>
					<td><b>Contact Number</b></td>
					<td>: '."$phone2".'</td>
				</tr>';
				if ($rating==NULL)
					$rating = "<i>Not yet rated</i>";
				if ($rat==NULL)
					$review = "<i>No review</i>";
				else if ($rev==NULL)
					$review = $review." <i>&lt;no review&gt;</i>";
				echo
				'<tr>
					<td><b>Overall Rating</b></td>
					<td>: '."$rating".'</td>
				</tr>
				<tr>
					<td style="vertical-align:top"><b>Top Review</b></td>
					<td>: '."$review".'</td>
				</tr>
				<tr>
					<td><b>Declared Price</b></td>
					<td>: AU$'."$val[2]".'</td>
				</tr>
			</table>
			<br />
			<form action="..\request_queue\acceptRequest.php" method="post">
				<input type="hidden" name="requestID" 	value="'."$val[0]".'">
				<input type="hidden" name="profID" 		value="'."$val[1]".'">
				<input type="hidden" name="price" 		value="'."$val[2]".'">
				<button type="submit" style="margin: auto 427px;" id="accept_button">Accept</button>
			</form>
			<form action="..\request_queue\declineRequest.php" method="post">
				<input type="hidden" name="requestID" 	value="'."$val[0]".'">
				<input type="hidden" name="profID" 		value="'."$val[1]".'">
				<button type="submit" id="decline_button">Decline</button>
			</form>
		</div>';
	}
?>