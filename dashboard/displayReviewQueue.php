<?php
	// Display all service requests
	if ($num==0)
		echo '<p>No pending review</p>';
	else
	foreach($query_set as $key => $val) {
		$requestID = $val[0];
		echo
		'<div class="request_block">
			<h3>Please take some time to review the service...</h3>
			<table style="width:500px;margin:0px 50px;font-family:Verdana;font-size:14px;color:white;">
				<tr>
					<td width="150px"><b>Professional Name</b></td>
					<td>: '."$val[3]".' ('."$val[2]".')</td>
				</tr>
				<tr>
					<td><b>Request ID</b></td>
					<td>: '."$requestID".'</td>
				</tr>';
				include '..\service_request\getRequestInfo.php';
				echo
				'<tr>
					<td><b>Car Details</b></td>
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
			</table>
			<br />
			<form action="..\review\createReview.php" method="post">
				<input type="hidden" name="requestID" value="'."$val[0]".'">
				<input type="hidden" name="profID" value="'."$val[2]".'">
				<p style="color:black;">
					Rate the professional from 1 to 5: 
					<input type="radio" name="rating" required value="1">1&nbsp;
					<input type="radio" name="rating" required value="2">2&nbsp;
					<input type="radio" name="rating" required value="3">3&nbsp;
					<input type="radio" name="rating" required value="4">4&nbsp;
					<input type="radio" name="rating" required value="5">5
				</p>
				<br />
				<p style="color:black;"> Please write down your review here (optional): </p>
				<p>
					<input type="text" name="review" autocomplete="off" size="70" maxlength="150">
				</p>
				<br />
				<button type="submit" class="menu_button" style="margin: auto 40px;">Publish Review</button>
			</form>
			<form action="..\review_queue\skipReview.php" method="post">
				<input type="hidden" name="requestID" value="'."$val[0]".'">
				<button type="submit" class="menu_button" style="margin: auto 40px;">No, thanks.</button>
			</form>
		</div>';
	}
?>