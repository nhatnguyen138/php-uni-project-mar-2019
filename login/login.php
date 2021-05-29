<html>
<head>
<title>Welcome to Assists 4 Motorists .Com .Au !</title>
<link rel="stylesheet" type="text/css" href="loginCSS.css">
</head>
<body>
	<p id="domain_name">Welcome to Assists 4 Motorists .Com .Au !</p>
	<!-- Login box -->
	<div id="loginbox">
		<h3 style="font-size:20px;">Log in</h3>
		<span id="error_message" style="color:red;font-style:italic;">&nbsp;</span>
		<form action="checkLogin.php" method="post">
			<p> Username </p>
			<p> <input type="text" 		name="username" autocomplete="off" required>	</p>
			<p> Password </p>
			<p> <input type="password"	name="password" autocomplete="off" required>	</p>
				<input class="button"	type="submit"	value="Log in">
				<a class="button" href="..\register\signupAccount.php"><font face="Verdana">Register</font></a>
		</form>
	</div>

<script>
	// Display error message if the user types incorrect username or password
	window.onload = function loginErrorMessage() {
		<?php session_start(); ?>
		<?php if (isset($_SESSION['error'])): ?>
			document.getElementById('error_message').innerHTML = "Invalid username or password, try again.";
		<?php endif; ?>
	}
</script>
</body>
</html>