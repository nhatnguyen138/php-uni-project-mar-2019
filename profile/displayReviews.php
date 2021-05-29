<?php
	// Display professional's rating and reviews
	if ($num>0) {
		$profID = $_SESSION['username'];
		include '..\user\professional\calcRating.php';
		echo
		'<h3>Overall Rating: '."$rating".'</h3><br />
		<h3>Reviews ('."$num".')</h3><hr />';
		foreach($query_set as $key => $val) {
			if ($val[4]==NULL)
				$display = "<i>&lt;no review&gt;</i>";
			else $display = '"'.$val[4].'"';
			echo
			'<table style="margin:0px 20px;font-family:Verdana;font-size:14px;color:white;">
				<tr>
					<td width="200px"><b>Request ID</b></td>
					<td>: '."$val[0]".'</td>
				</tr>';
				$requestID = $val[0];
				include '..\service_request\getRequestInfo.php';
				echo
				'<tr>
					<td><b>Customer Name</b></td>
					<td>: '."$cust_name".' ('."$custID".')</td>
				</tr>
				<tr>
					<td><b>Rating</b></td>
					<td>: '."$val[3]".'.0</td>
				</tr>
				<tr>
					<td style="vertical-align:top"><b>Review</b></td>
					<td>: <i>'."$display".'</i></td>
				</tr>
			</table>
			<hr />';
		}
	}
	else
		echo '<p>You have no rating and review yet.</p>';
?>
