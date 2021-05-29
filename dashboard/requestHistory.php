<html>
<head>
<title>Request History | Assists 4 Motorists .Com .Au</title>
<link rel="stylesheet" type="text/css" href="dashboardCSS.css">
</head>
<body>
<?php
	// Provide login data (user information)
	// And display the 'Menu' bar
	include '..\session\session.php';
	
	// Display the request history
	include '..\service_request\getRequestHistory.php';
	echo
	'<div class="menu_block">
	<h2>Request History ('."$num".')</h2>';
	foreach($query_set as $key => $val) {
		$requestID = $val[1];
		echo
		'<div class="request_block">
			<h2>Request ID: '."$requestID".'</h2>
			<h3>1. Request Information:</h3>
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
				<h3>2. Professional Assistance:</h3>';
		if ($val[5] == NULL)
			echo
			'<p style="margin:0px 50px;"><i>The request is not yet assigned</i></p><br />';
		else {
			$username2 = $val[5];
			include '..\user\getUserInfo2.php';
			echo
			'<table style="width:500px;margin:0px 50px;font-family:Verdana;font-size:14px;color:white;">
				<tr>
					<td width="150px"><b>Professional Name</b></td>
					<td>: '."$fname2".' '."$lname2".'</td>
				</tr>
				<tr>
					<td><b>Contact Number</b></td>
					<td>: '."$phone2".'</td>
				</tr>
				<tr>
					<td><b>Service Fee</b></td>
					<td>: AU$'."$val[10]".'</td>
				</tr>';
			if ($usertype==0) {
				$username2 = $val[2];
				include '..\user\customer\getSubscriptionOption.php';
				if ($subscription2==0) {
					echo
					'<tr>
						<td><b>Customer Subscription</b></td>
						<td style="vertical-align:top">: <i>Pay-on-demand</i></td>
					<tr>
					<tr>
						<td><b>Paid Amount</b></td>
						<td>: AU$'."$val[10]".'</td>
					</tr>';
				}
				else if ($subscription2==1) {
					echo
					'<tr>
						<td><b>Customer Subscription</b></td>
						<td style="vertical-align:top">: <i>Membership</i></td>
					<tr>
					<tr>
						<td><b>Paid Amount</b></td>
						<td>: AU$0.00</td>
					</tr>';
				}
			}
			echo '</table>';
		}
		echo '<h3>3. Post-Request Rating & Review</h3>';
		include '..\review\getReviewInfo.php';
		if ($custID==NULL)
			echo '<p style="margin:0px 50px;"><i>No rating or review for this request</i></p>';
		else {
			if ($review==NULL)
				$display = "<i>&lt;no review&gt;</i>";
			else $display = '"'.$review.'"';
			echo
			'<p style="margin:auto 50px;color:lightblue;font-size:34px">'."$rating".'*</p>
			<p style="margin:auto 50px;font-size:16px"><i>'."$display".'</i></p>';
		}
		echo '</div>';
	}
	echo '</div>';
?>
</body>
</html>