<html>
<head>
<title>Edit Profile | Assists 4 Motorists .Com .Au</title>
<link rel="stylesheet" type="text/css" href="profileCSS.css">
</head>
<body>
<?php
	// Provide login data (user information)
	// And display the 'Menu' bar
	include '..\session\session.php';
?>
	<div>
		<h2>Edit Your User Info</h2>
		<?php
			// Error message
			if (isset($_SESSION['usrn_error'])) {
				echo '<span style="color:red;">ERROR: Username taken</span><br />';
			}
		?>
		<form action="checkInfoUpdate.php" method="post">
			<table style="margin:0px 20px;font-family:Verdana;font-size:14px;color:white;">
			<tr>
				<td width="200px"><b>First name</b></td>
				<td>
					: <input type="text" name="fname" autocomplete="off"
					pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$" required
					size="30" value="<?php echo $fname; ?>">
				</td>
			</tr>
			<tr>
				<td width="200px"><b>Last name</b></td>
				<td>
					: <input type="text" name="lname" autocomplete="off"
					pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$" required
					size="30" value="<?php echo $lname; ?>">
				</td>
			</tr>
			<tr>
				<td><b>Username</b></td>
				<td>
					: <input type="text" name="username" autocomplete="off"
					pattern="^[A-Za-z0-9]{6,30}$" required
					size="30" value="<?php echo $username; ?>">
				</td>
			</tr>
			<tr>
				<td><b>Email</b></td>
				<td>
					: <input type="text" name="email" autocomplete="off"
					pattern="^.+@+[a-z]{2,10}\.+.{2,10}$" required
					size="30" value="<?php echo $email; ?>">
				</td>
			</tr>
			<tr>
				<td><b>Phone Number</b></td>
				<td>
					: <input type="text" name="phone" autocomplete="off"
					pattern="^\d{10}$" required
					size="30" value="<?php echo $phone; ?>">
				</td>
			</tr>
			</table>
			<input class="menu_button" type="submit" value="Submit">
		</form>
	</div>
</body>
</html>