<html>
<head>
<title>Dashboard | Assists 4 Motorists .Com .Au</title>
<link rel="stylesheet" type="text/css" href="dashboardCSS.css">
</head>
<body>
<?php
	// Provide login data (user information)
	// And display the 'Menu' bar
	include '..\session\session.php';
?>
	<table>
		<tr>
			<!-- Request Button (CUSTOMER only) -->
			<td id="send_request" style="display:none;">
				<?php
					if ($usertype==0) {
						echo
						'<a id="request_button" href="sendRequest.php">Request for Roadside Assistance now!</a>';
					}
				?>
			</td>
		</tr>
		<tr>
			<!-- Mechanical Offers (PROFESSIONAL only) -->
			<td id="mechanical_offers" style="display:none;">
				<div class="menu_block">
				<?php
					if ($usertype==1) {
						// Fetch all available service requests
						include '..\service_request\getServiceRequests.php';
						echo '<h2>Mechanical Offers ('."$num".')</h2>';
						include 'displayServiceRequests.php';		
					}
				?>
				</div>
			</td>
		</tr>
		<tr>
			<!-- Assistance Requests (CUSTOMER only) -->
			<td id="assistance_requests" style="display:none;">
				<div class="menu_block">
				<?php
					if ($usertype==0) {
						// Fetch all assistance requests
						include '..\request_queue\getAssistanceRequests.php';
						echo '<h2>Assistance Requests ('."$num".')</h2>';
						include 'displayAssistanceRequests.php';
					}
				?>
				</div>
			</td>
		</tr>
		<tr>
			<!-- Review Queue (CUSTOMER only) -->
			<td id="review_queue" style="display:none;">
				<div class="menu_block">
				<?php
					if ($usertype==0) {
						// Fetch the review queue information
						include '..\review_queue\getReviewQueue.php';
						echo '<h2>Review Queue ('."$num".')</h2>';
						include 'displayReviewQueue.php';
					}
				?>
				</div>
			</td>
		</tr>
		<tr>
			<!-- Request History -->
			<td id="request_history">
				<div class="menu_block">
				<?php
					include '..\service_request\getRequestHistory.php';
					echo '<h2>Request History ('."$num".')</h2>';
				?>
					<a class="menu_button" href="requestHistory.php">Show All Request History</a>
				</div>
			</td>
		</tr>
	</table>

<script>
	// Display 'Request Button' and 'Review Queue' if the user is a CUSTOMER
	window.onload = function blockDisplay() {
		var utype = <?php echo $usertype ?>;
		if (utype==0) {
			document.getElementById('send_request').style.display='block';
			document.getElementById('assistance_requests').style.display='block';
			document.getElementById('review_queue').style.display='block';
		}
		else {
			document.getElementById('mechanical_offers').style.display='block';
		}
	}
</script>
</body>
</html>