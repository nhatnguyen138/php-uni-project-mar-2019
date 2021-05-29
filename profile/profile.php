<html>
<head>
<title>Profile | Assists 4 Motorists .Com .Au</title>
<link rel="stylesheet" type="text/css" href="profileCSS.css">
</head>
<body>
<?php
	// Provide login data (user information)
	// And display the 'Menu' bar
	include '..\session\session.php';
?>
	<table style="width:100%;max-width:600px;">
		<tr>
			<td>
				<!-- User Information -->
				<div id="user_info">
					<h2>User Profile</h2>
					<!-- Personal Information -->
					<h3>Personal Information<a id="edit_button" href="editProfile.php">Edit Info</a></h3>
					<?php include 'displayUserInfo.php'; ?>
					
					<!-- Customer Information -->
					<span id="cust_info" style="display:none;">
					<?php include 'displayCustInfo.php'; ?>
					</span>
					
					<!-- Professional Information -->
					<span id="prof_info" style="display:none;">
					<?php include 'displayProfInfo.php'; ?>
					<span>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<!-- Rating & Reviews -->
				<div id="rating" style="display:none;">
				<?php
					if ($usertype==1) {
						include '..\review\getProfReviews.php';
						echo '<h2>Rating & Reviews</h2>';
						include 'displayReviews.php';
					}
				?>
				</div>
			</td>
		</tr>
	</table>
<script>
	// Display the rating and reviews if the user is a PROFESSIONAL
	// And display appropriate user information
	window.onload = function displayInfo() {
		var utype = <?php echo $usertype ?>;
		if (utype==0) {
			document.getElementById('cust_info').style.display='block';
		}
		else if (utype==1) {
			document.getElementById('rating').style.display='block';
			document.getElementById('prof_info').style.display='block';
		}
	}
</script>
</body>
</html>